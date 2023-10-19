<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;
use App\Models\Customers;

class Index extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [];
        return view('index', $data);
    }

    public function indexAdmin()
    {
        $data['page_title'] = ' - Login';
        return view('admin/index', $data);
    }

    public function auth()
    {
        $session = session();
        $model = new Customers();
        $usermail = $this->request->getVar('authusem');
        $password = $this->request->getVar('authpass');
        $data = $model->where('username', $usermail)->orWhere('email', $usermail)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $session_data = [
                    'id'        => $data['id'],
                    'username'  => $data['username'],
                    'email'     => $data['email'],
                    'logged_in' => TRUE,
                ];
                $session->set($session_data);
                return redirect()->to('/home');
            } else {
                $session->setFlashdata('msg', 'Incorrect password');
                return redirect()->to('/');
            }
        } else {
            $session->setFlashdata('msg', 'Incorrect username or email, or password');
            return redirect()->to('/');
        }
    }

    public function authAdmin()
    {
        $session = session();
        $model = new Users();
        $usermail = $this->request->getVar('authusem');
        $password = $this->request->getVar('authpass');
        $data = $model->where('username', $usermail)->orWhere('email', $usermail)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $session_data = [
                    'id'        => $data['id'],
                    'username'  => $data['username'],
                    'email'     => $data['email'],
                    'position_id' => $data['position_id'],
                    'logged_in' => TRUE,
                ];
                $session->set($session_data);
                return redirect()->to('/admin/dashboard');
            } else {
                $session->setFlashdata('msg', 'Incorrect password');
                return redirect()->to('/admin');
            }
        } else {
            $session->setFlashdata('msg', 'Incorrect username or email, or password');
            return redirect()->to('/admin');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function logoutAdmin()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/admin');
    }
}
