<?php

namespace App\Controllers;

use App\Models\RegisterModel;
use CodeIgniter\HTTP\Exceptions\RedirectException;

class Register extends BaseController
{

    protected $registerModel;

    public function __construct()
    {
        $this->registerModel = new RegisterModel();
    }
    public function regis()
    {
        return view('frontend/register');
    }

    public function proccessRegister()
    {
        $session = session();

        $validate = \Config\Services::validation();

        $validate->setRules([
            'usernameregister' => 'required|alpha_numeric',
            'passwordregister' => 'required'
        ]);


        if (!$validate->withRequest($this->request)->run()) {
 
            $session->setFlashdata('error', 'failed');
            return redirect()->to('register');
        }


        $username = esc($this->request->getPost('usernameregister'));
        $password = esc($this->request->getPost('passwordregister'));

        if ($this->registerModel->isUsernameExist($username)) {
            $session->setFlashdata('error', 'exist');
            return redirect()->to('register');
        } else {
    
            $this->registerModel->regis($username, $password, 'pengguna');
            return redirect()->to('login');
        }
    }
}
