<?php

namespace App\Controllers;
use App\Models\BookingModel;
use App\Models\TourModel;
use App\Models\UserModel;


class Home extends BaseController
{
    public function index(): string
    {
        return view('landingpage');
    }


    public function profile(): string
    {
        $session = session();
        $userId = $session->get('user_id');
        $usermodel = new UserModel();
        $user = $usermodel->where('user_id', $userId)->first();

        $bookingModel = new BookingModel();
        $totalBooking = $bookingModel->where('user_id', $userId)->countAllResults();
        $upcommingBooking = $bookingModel->join('tours', 'tours.tour_id = bookings.tour_id')
            ->where('bookings.user_id', $userId)
            ->where('tours.departure_date >', date('Y-m-d H:i:s'))
            ->countAllResults();

        // Get current user data from session
        $userData = [
            'name' => $user['name'],
            'email' => $user['email'],
            'profile_pic' => $user['profile_pic'], 
            'phone' => $user['phone_number'] ?? '-',
            'location' => $user['location']?? '-',
            'status' => 'Active',
            'member_since' => date('d-m-Y', strtotime($user['created_at']))  ?? '-',
            'bookings' => $totalBooking,
            'upcoming' => $upcommingBooking,
            'role' => ucfirst($user['role'] ?? 'Traveler'),
        ];
        return view('userprofile', $userData);
    }

}
