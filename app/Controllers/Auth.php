<?php

namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function register()
    {
        helper(['form']);

        if ($this->request->getMethod() == 'POST') {
            $userModel = new UserModel();
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'role' => 'user',
                'profile_pic' => 'default_profile_pic.png'
            ];

            $userModel->save($data);
            return redirect()->to('/login');
        }
        return view('auth/register');
    }

    public function login()
    {
        helper(['form']);
        if ($this->request->getMethod() === 'POST') {

            $session = session();
            $model = new UserModel();

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $user = $model->where('email', $email)->first();
    
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $ses_data = [
                        'user_id' => $user['user_id'],
                        'name' => $user['name'],
                        'role' => $user['role'],
                        'profile_pic' => $user['profile_pic'],
                        'logged_in' => true
                    ];

                    $session->set($ses_data);
                    return redirect()->to('/');
                } else {
                    return redirect()->back()->with('error', 'Invalid password');
                }
            } else {
                return redirect()->back()->with('error', 'Email not found');
            }
        }

        // Show login form on GET request
        return view('auth/login');
    }



    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
