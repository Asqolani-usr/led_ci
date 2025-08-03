<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan username
        $user = $model->where('username', $username)->first();

        if ($user) {
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Set session login
                $session->set([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'isLoggedIn' => true
                ]);

                return redirect()->to('/'); 
            } else {
                $session->setFlashdata('msg', 'Password salah, coba lagi!');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Username Tidak ditemukan');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
