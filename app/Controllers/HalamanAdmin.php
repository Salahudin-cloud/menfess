<?php

namespace App\Controllers;

class HalamanAdmin extends BaseController
{
      // render halaman dashboar admin  admn 
    public function admin()
    {
        return view('backend/admin/admin');
    }
}
