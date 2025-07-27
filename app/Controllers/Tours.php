<?php

namespace App\Controllers;

use App\Models\TourModel;

class Tours extends BaseController
{
    public function index()
    {
       try {
            $model = new TourModel();
            $data['tours'] = $model->findAll();

            return view("tours/index",$data);
        } catch (\Throwable $e) {
            echo "❌ Error: " . $e->getMessage();
        }
    }
}

