<?php

namespace App\Controllers;

use App\Models\RegisterModel;
use CodeIgniter\HTTP\Exceptions\RedirectException;

class Register extends BaseController
{

    protected $registerModel;

    // inisialissasi model 
    public function __construct()
    {
        $this->registerModel = new RegisterModel();
    }
    // r3nder view register
    public function regis()
    {
        return view('frontend/register');
    }


    // proccess melakukan register 
    public function proccessRegister()
    {
        $session = session();
        // menggunakan library validation 
        $validate = \Config\Services::validation();
        // set rule form 
        $validate->setRules([
            'usernameregister' => 'required|alpha_numeric',
            'passwordregister' => 'required'
        ]);

        // menjalankan rule 
        if (!$validate->withRequest($this->request)->run()) {
            // jika validasi gagal 
            $session->setFlashdata('error', 'failed');
            return redirect()->to('register');
        }

        // mendapatkan data 
        $username = esc($this->request->getPost('usernameregister'));
        $password = esc($this->request->getPost('passwordregister'));

        if ($this->registerModel->isUsernameExist($username)) {
            $session->setFlashdata('error', 'exist');
            return redirect()->to('register');
        } else {
            // melakukan insert 
            $this->registerModel->regis($username, $password, 'pengguna');
            return redirect()->to('login');
        }
    }
}
