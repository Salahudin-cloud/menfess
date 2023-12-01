<?php

namespace App\Controllers;

class HomeAdmin extends BaseController
{
      // render halaman dashboar admin  admn 
    public function index()
    {
        return view('backend/admin/index');
    }
}
