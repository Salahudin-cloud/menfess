<?php


namespace App\Controllers;

class MengelolaUser extends BaseController
{
      // render halaman user manager  admn 
    public function usermanage()
    {
        return view('backend/admin/user_management');
    }
}
