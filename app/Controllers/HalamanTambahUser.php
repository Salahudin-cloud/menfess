<?php

namespace App\Controllers;

class HalamanTambahUser extends BaseController
{
      // render halaman dashboar admin  admn 
    public function tambahusr()
    {
        return view('backend/admin/tambahuser');
    }
}
