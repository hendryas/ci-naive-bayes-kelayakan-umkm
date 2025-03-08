<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class AuthenticationController extends BaseController
{
    public function index()
    {
        return view('auth/login_page');
    }
    public function login()
    {
        if ($this->request->isAJAX()) { // Pastikan request berasal dari AJAX
            $rules = [
                'username' => 'required',
                'password' => 'required'
            ];

            if (!$this->validate($rules)) {
                return $this->response
                    ->setStatusCode(400)
                    ->setContentType('application/json')
                    ->setJSON(['status' => 400, 'message' => 'Username dan password harus diisi!']);
            }

            $userModel = new UserModel();
            $user = $userModel->where('username', $this->request->getPost('username'))->first();

            if (!$user || !password_verify($this->request->getPost('password'), $user['password'])) {
                return $this->response
                    ->setStatusCode(401)
                    ->setContentType('application/json')
                    ->setJSON(['status' => 401, 'message' => 'Username atau password salah!']);
            }

            // Simpan session jika login berhasil
            session()->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'logged_in' => true
            ]);

            return $this->response
                ->setStatusCode(200)
                ->setContentType('application/json')
                ->setJSON([
                    'status' => 200,
                    'message' => 'Login berhasil',
                    'user' => [
                        'id' => $user['id'],
                        'username' => $user['username'],
                        'email' => $user['email']
                    ]
                ]);
        } else {
            return redirect()->to('/auth')->with('error', 'Invalid request');
        }
    }

    public function logout()
    {
        session()->destroy(); // Hapus session
        return redirect()->to('/auth'); // Kembali ke halaman login
    }
}
