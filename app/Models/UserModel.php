<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "user_id";
    protected $allowedFields = ['name','email','password','role', 'phone_number','location','profile_pic'];
    protected $returnType = 'array';

}