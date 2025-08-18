<?php

namespace App\Controllers;

use App\Models\TourModel;

class TourController extends BaseController
{
    public function index()
    {
        $model = new TourModel();
        $data['tours'] = $model->findAll();
        return view('/admin/manage_tours', $data);
    }

    public function create()
    {
        if ($this->request->is('get')) {
            return view('admin/create_tour');
        }
       
        $file = $this->request->getFile('image');
        $imageName = '';

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/tours/', $imageName);
        }

        $tourModel = new TourModel();
        $tourModel->insert([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'from_location' => $this->request->getPost('from_location'),
            'to_location' => $this->request->getPost('to_location'),
            'departure_date' => $this->request->getPost('departure_date'),
            'return_date' => $this->request->getPost('return_date'),
            'price_per_person' => $this->request->getPost('price_per_person'),
            'status' => $this->request->getPost('status'),
            'image' => $imageName
        ]);

        return redirect()->to('/dashboard/admin/manage-tours');
    }


    public function edit($id)
    {
        $model = new TourModel();
        $data['tour'] = $model->find($id);
        return view('admin/edit_tour', $data);
    }


    public function store()
    {

    }

    public function update($id)
    {
        $tourModel = new TourModel();
        $tour = $tourModel->find($id);

        $file = $this->request->getFile('image');
        $imageName = $tour['image']; // keep old if no new file

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/tours/', $imageName);

            // Optional: delete old image
            if (!empty($tour['image']) && file_exists('uploads/tours/' . $tour['image'])) {
                unlink('uploads/tours/' . $tour['image']);
            }
        }

        $tourModel->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'from_location' => $this->request->getPost('from_location'),
            'to_location' => $this->request->getPost('to_location'),
            'departure_date' => $this->request->getPost('departure_date'),
            'return_date' => $this->request->getPost('return_date'),
            'price_per_person' => $this->request->getPost('price_per_person'),
            'status' => $this->request->getPost('status'),
            'image' => $imageName
        ]);

        return redirect()->to('/dashboard/admin/manage-tours');
    }

    public function delete($id)
    {
        $model = new TourModel();
        $model->delete($id);
        return redirect()->to('/dashboard/manage-tours');
    }


    public function explore()
    {
        $tourModel = new TourModel();
        $search = $this->request->getGet('search');
        if ($search) {
            $data['tours'] =  $tourModel->like('title', $search)
                    ->orLike('description', $search)
                    ->findAll();;
             return view('explore', $data);
        }
        $data['tours'] = $tourModel->findAll();
        return view('explore', $data);
    }

    public function tourdetails($tour_id)
    {
        $tourModel = new TourModel();
        $data['tour'] = $tourModel->find($tour_id);

        return view('tourpage', $data);
    }
}

