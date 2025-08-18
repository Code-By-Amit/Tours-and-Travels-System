<?php

namespace App\Models;
use CodeIgniter\Model;

class TourModel extends Model
{
    protected $table = 'tours';
      protected $primaryKey       = 'tour_id';
    protected $allowedFields = [
        'title', 'description', 'price', 'image', 'from_location'
    ,'to_location','departure_date','return_date', 'price_per_person', 'status'];
      protected $returnType       = 'array';
}