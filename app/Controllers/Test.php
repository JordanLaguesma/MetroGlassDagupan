<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Test extends BaseController
{
    public function connect()
    {
        $connect = db_connect();
        if(!$connect) {
            die('Cannot connect to database...');
        } else {
            echo "Connection is working!";
        }
    }
}
