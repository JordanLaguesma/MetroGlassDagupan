<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class GlassMain extends BaseController
{
    public function index()
    {
        return view('home');
    }
}
