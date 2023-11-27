<?php

namespace App\Controllers;

class HomeBackend extends BaseController
{
    public function index()
    {
        return view('backend/index');
    }
}
