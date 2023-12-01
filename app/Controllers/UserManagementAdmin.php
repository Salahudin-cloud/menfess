<?php


namespace App\Controllers;

class UserManagementAdmin extends BaseController
{
      // render halaman user manager  admn 
    public function index()
    {
        return view('backend/admin/user_management');
    }
}
