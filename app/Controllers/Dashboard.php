<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// Models
use App\Models\Users;
use App\Models\Orders;
use App\Models\Positions;
use App\Models\Products;
// TablesIgniter
use monken\TablesIgniter;

class Dashboard extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data['active_page'] = 0;
        $data['page_title'] = ' - Dashboard';
        $model = new Positions();
        $data['position'] = $model->findAll();
        return view('admin/dashboard', $data);
    }

    // Inventory section - Start
    public function inInventory()
    {
        helper(['form']);
        $data['active_page'] = 1;
        $data['page_title'] = ' - Inventory';
        return view('admin/inventory', $data);
    }

    public function tableProducts()
    {
        $model = new Products();
        $table = new TablesIgniter();
        $table->setTable($model->noticeTable())
            ->setOutput(["id", "name", "sizes", "quantity", $model->button()]);
        return $table->getDatatable();
    }
    // Inventory section - End

    // User Management section - Start
    public function inUsers()
    {
        helper(['form']);
        $data['active_page'] = 2;
        $data['page_title'] = ' - Users';
        $model = new Positions();
        $data['position'] = $model->findAll();
        return view('admin/users', $data);
    }

    public function tableUsers()
    {
        $model = new Users();
        $table = new TablesIgniter();
        $table->setTable($model->noticeTable())
            ->setOutput(["id", "username", "position_id", "email", $model->actions()]);
        return $table->getDatatable();
    }

    public function saveUser()
    {
        $error = 1;
        $username_error    = "";
        $email_error       = "";
        $position_id_error = "";
        $password_error    = "";
        $model = new Users();
        $rules = $this->validate([
            'username' => 'required|min_length[5]|max_length[30]',
            'email'    => 'required|min_length[10]|max_length[50]|is_unique[users.email]',
            'position' => 'required',
            'password' => 'required|min_length[5]|max_length[30]',
        ]);
        if (!$rules) {
            $validation = \Config\Services::validation();
            if ($validation->getError('username')) {
                $username_error = $validation->getError('username');
            }
            if ($validation->getError('email')) {
                $email_error = $validation->getError('email');
            }
            if ($validation->getError('position_id')) {
                $position_id_error = $validation->getError('position_id');
            }
            if ($validation->getError('password')) {
                $password_error = $validation->getError('password');
            }
        } else {
            $error = 0;
            $data = [
                'username'    => $this->request->getVar('username'),
                'email'       => $this->request->getVar('email'),
                'position_id' => $this->request->getVar('position_id'),
                'password'    => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
            $model->save($data);
        }
        $output = array(
            'error' => $error,
            'username_error' => $username_error,
            'email_error'    => $email_error,
            'position_id_error' => $position_id_error,
            'password_error' => $password_error,
        );
        echo json_encode($output);
    }
    // User Managment section - End

    // Orders section - Start
    public function inOrders()
    {
        helper(['form']);
        $data['active_page'] = 3;
        $data['page_title'] = ' - Orders';
        return view('admin/orders', $data);
    }

    public function tableOrders()
    {
        $model = new Orders();
        $table = new TablesIgniter();
        $table->setTable($model->noticeTable())
            ->setOutput(["id", "customer_id", "product_id", "status", "cost", $model->button()]);
        return $table->getDatatable();
    }
    // Orders section - End
}
