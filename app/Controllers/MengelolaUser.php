<?php


namespace App\Controllers;

use App\Models\MengelolaUserModel;

class MengelolaUser extends BaseController
{
      // render halaman user manager  admn 
    public function usermanage()
    {
        $mengelola_user = new MengelolaUserModel();
        $all_data = $mengelola_user->findAll();
        return view('backend/admin/user_management', ['all_data'=>$all_data]);
    }
}
