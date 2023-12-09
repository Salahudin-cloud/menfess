<?php

namespace App\Controllers;


class HalamanAdmin extends BaseController
{
    // render halaman dashboar admin  admn 
    public function admin()
    {
        // check status login
        $session = session();
        if (!$session->get('isLogin')) {
            return redirect()->to('login');
        }
        return view('backend/admin/admin');
    }
}
