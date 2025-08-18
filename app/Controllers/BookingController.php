<?php

namespace App\Controllers;
use App\Models\BookingModel;
use App\Models\TourModel;

class BookingController extends BaseController
{
    public function myBookings()
    {
        $userId = session()->get('user_id'); // ensure this is set at login
        $bookingModel = new BookingModel();

        $data['bookings'] = $bookingModel->getUserBookings($userId);
        return view('my-bookings', $data);
    }

    public function bookTour($tour_id)
    {
        $userId = session()->get('user_id');
        $bookingModel = new BookingModel();
        $tourModel = new TourModel();

        $tour = $tourModel->find($tour_id);
        if ($tour) {
            $no_of_persons = $this->request->getPost('no_of_persons');
         
            // Validate number of persons
            if (!is_numeric($no_of_persons) || $no_of_persons <= 0) {
                return redirect()->back()->with('error', 'Invalid number of persons.');
            }

            $total_amount = $tour['price_per_person'] * $no_of_persons;

            $data = [
                'user_id' => $userId,
                'tour_id' => $tour_id,
                'number_of_persons' => $no_of_persons,
                'total_amount' => $total_amount
            ];

            // Assuming you have a model method to insert the booking
            $bookingModel->insert($data);

            return redirect()->back()->with('success', 'Tour booked successfully!');
        } else {
            return redirect()->back()->with('error', 'Tour not found.');
        }
    }


    public function cancelBooking($booking_id)  {
        $bookingModel = new BookingModel();
        $booking = $bookingModel->find($booking_id); 
        if ($booking) {
             $bookingModel->delete($booking_id);
            return redirect()->back()->with('success', 'Booking canceled successfully.');
        }else{
            return redirect()->back()->with('error', 'Error while cancelling booking.');
        }
    }  

}