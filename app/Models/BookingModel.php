<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'booking_id';

    protected $allowedFields = ['user_id', 'tour_id', 'booking_date','from_location','to_location', 'departure_date', 'return_date', 'status', 'number_of_persons', 'total_amount',];

    protected $returnType = 'array';

    // Relationships (custom method)
    public function getUserBookings($userId)
    {
        return $this->select('bookings.*, tours.image, tours.title, tours.from_location, tours.to_location, tours.departure_date, tours.return_date, tours.price_per_person')
            ->join('tours', 'tours.tour_id = bookings.tour_id')
            ->where('bookings.user_id', $userId)
            ->findAll();
    }
}
