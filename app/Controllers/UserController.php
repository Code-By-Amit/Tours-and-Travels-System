<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{

    public function index()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();  // Optional: use only verified users
        return view('admin/manage_users', $data);
    }

    public function deleteAccount()
    {
        $userModel = new UserModel();
        $session = session();
        $id = $session->get('user_id');
        $userModel->delete($id);
        $session->destroy();
        return redirect()->to('/');
    }


    public function editProfile()
    {
        // Assuming you store user ID in session
    }

    public function updateProfile()
    {
        $model = new UserModel();
        $userId = session()->get('user_id');

        // Handle GET request (show form)
        if ($this->request->is('get')) {
            $data['user'] = $model->find($userId);
            return view('edit_profile', $data);
        }

        // POST: Update data
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone_number' => $this->request->getPost('phone_number'),
            'location' => $this->request->getPost('location'),
        ];

        $file = $this->request->getFile('profile_pic');
        $currentUser = $model->find($userId); //  Fetch current user to get old image

        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Save new file
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads/profile', $newName);
            $data['profile_pic'] = $newName;

            // Delete old image
            if (!empty($currentUser['profile_pic'])) {
                $oldPath = ROOTPATH . 'public/uploads/profile/' . $currentUser['profile_pic'];
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
        }

        // Update database
        $model->update($userId, $data);

        // Update session
        session()->set([
            'name' => $data['name'],
            'profile_pic' => $data['profile_pic'] ?? session()->get('profile_pic'),
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }


    public function changepassword()
    {
        if ($this->request->is('get')) {
            return view('change_password');
        }
        $model = new UserModel();
        $user_id = session()->get('user_id');
        $currentPassword = $this->request->getPost('current_password');
        $newPassword = $this->request->getPost('new_password');
        $user = $model->find($user_id);
        if ($user) {
            if (password_verify($currentPassword, $user['password'])) {
                $data = [
                    'user_id' => $user_id,
                    'password' => password_hash($newPassword, PASSWORD_DEFAULT),
                ];
                $model->save($data);
                return redirect()->back()->with('success', 'Password changed successfully.');
            } else {
                return redirect()->back()->with('error', 'Current password is incorrect.');
            }
        }

    }



    public function changeUserRole($user_id)
    {
        if (session()->get('role') != 'admin') {
            return redirect()->back()->with('error', 'You are not authorized to perform this action.');
        }
        if(session('user_id') == $user_id) {
            return redirect()->back()->with('error', 'You cannot change your own role.');
        }
        $usermodel = new UserModel();
        $role = $this->request->getPost('role');

        $user = $usermodel->find($user_id);
        if ($user) {
            $usermodel->update($user_id, ['role' => $role]);
            return redirect()->back()->with('success', 'Role changed successfully.');
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }

    }
}
