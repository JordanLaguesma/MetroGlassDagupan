<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Customers;
use App\Models\Users;

class Register extends BaseController
{
    public function indexAdmin()
    {
        helper(['form']);
        $data = [];
        return view('admin/register', $data);
    }

    public function save()
    {
        helper(['form']);
        $error = 1;
        $username_error = '';
        $email_error    = '';
        $address_error  = '';
        $contact_error =  '';
        $password_error = '';
        $confpass_error = '';
        $model = new Customers();
        $rules = $this->validate([
            'username' => 'required|min_length[5]|max_length[30]',
            'email'    => 'required|min_length[5]|max_length[50]|is_unique[users.email]',
            'password' => 'required|min_length[5]|max_length[300]',
            'confpass' => 'matches[password]',
        ]);
        if (!$rules) {
            $validation = \Config\Services::validation();
            if ($validation->getError('username')) {
                $username_error = $validation->getError('username');
            }
            if ($validation->getError('email')) {
                $email_error = $validation->getError('email');
            }
            if ($validation->getError('address')) {
                $address_error = $validation->getError('address');
            }
            if ($validation->getError('contact')) {
                $contact_error = $validation->getError('contact');
            }
            if ($validation->getError('password')) {
                $password_error = $validation->getError('password');
            }
            if ($validation->getError('confpass')) {
                $confpass_error = $validation->getError('confpass');
            }
        } else {
            $error = 0;
            $data = [
                'username'  => $this->request->getVar('username'),
                'email'     => $this->request->getVar('email'),
                'address' => $this->request->getVar('address'),
                'contact' => $this->request->getVar('contact'),
                'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'user_type' => '1'
            ];
            $model->save($data);
        }
        $output = array(
            'error' => $error,
            'username_error' => $username_error,
            'email_error'    => $email_error,
            'address_error'  => $address_error,
            'contact_error'  => $contact_error,
            'password_error' => $password_error,
            'confpass_error' => $confpass_error,
        );
        echo json_encode($output);
    }

    public function saveAdmin()
    {
        helper(['form']);
        $error = 1;
        $username_error = '';
        $email_error    = '';
        $password_error = '';
        $confpass_error = '';
        $model = new Users();
        $rules = $this->validate([
            'username' => 'required',
            'email'    => 'required|is_unique[customers.email]',
            'password' => 'required',
            'confpass' => 'matches[password]',
        ]);
        if (!$rules) {
            $validation = \Config\Services::validation();
            if ($validation->getError('username')) {
                $username_error = $validation->getError('username');
            }
            if ($validation->getError('email')) {
                $email_error = $validation->getError('email');
            }
            if ($validation->getError('password')) {
                $password_error = $validation->getError('password');
            }
            if ($validation->getError('confpass')) {
                $confpass_error = $validation->getError('confpass');
            }
        } else {
            $error = 0;
            $data = [
                'username'  => $this->request->getVar('username'),
                'email'     => $this->request->getVar('email'),
                'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'user_type' => '1'
            ];
            $model->save($data);
        }
        $output = array(
            'error' => $error,
            'username_error' => $username_error,
            'email_error'    => $email_error,
            'password_error' => $password_error,
            'confpass_error' => $confpass_error,
        );
        echo json_encode($output);
    }
}
