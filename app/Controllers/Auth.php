<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function processLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session = session();
            $session->set([
                'userId' => $user['id'],
                'username' => $user['username'],
                'phone' => $user['phone'],
            ]);
            return redirect()->to('/');
        } else {
            return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login')->with('success', 'Logout successful. Please login again.');
    }


    public function register()
    {
        return view('register');
    }

    public function processRegister()
    {
        $validationRules = [
            'username' => 'required|min_length[3]|max_length[50]',
            'phone' => 'required|min_length[10]|max_length[15]',
            'password' => 'required|min_length[8]'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $username = $this->request->getPost('username');
        $phone = $this->request->getPost('phone');
        $password = $this->request->getPost('password');

        $userModel = new \App\Models\UserModel();
        $userData = [
            'username' => $username,
            'phone' => $phone,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ];
        $userModel->insert($userData);

        return redirect()->to('/login')->with('success', 'Registration successful. Please login.');
    }
}
