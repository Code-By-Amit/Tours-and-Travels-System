<?php

namespace App\Models;
use CodeIgniter\Model;

class TourModel extends Model
{
    protected $table = 'tours';
    protected $allowedFields = ['title', 'description', 'price', 'image'];
}