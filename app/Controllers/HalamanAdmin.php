<?php

namespace App\Controllers;

use App\Models\HalamanAdminModel;

class HalamanAdmin extends BaseController
{
      // render halaman dashboar admin  admn 
    public function admin()
    {
        $halaman_admin = new HalamanAdminModel();
        $data_admin = $halaman_admin-> where('role','admin')->findAll();
        return view('backend/admin/admin',['data_admin'=>$data_admin]);
    }
}
