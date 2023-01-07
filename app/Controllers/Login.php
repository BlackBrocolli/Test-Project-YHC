<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {
        if (session()->get('logged_in')) { // jika sudah login
            return redirect()->to('/home'); // kembali ke home
        }

        $data['title'] = 'Login';
        return view('login_view', $data);
    }

    public function process()
    {
        $users = new UsersModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'email' => $email,
        ])->first();
        if ($dataUser) {
            if ($password === $dataUser->password) {
                session()->set([
                    'email' => $dataUser->email,
                    'name' => $dataUser->nama_user,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('error', 'Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Email & Password Salah');
            return redirect()->back();
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
