<?php


namespace App\Controllers;

use App\Models\PengelolaUserModel;

class PengelolaUser extends BaseController
{
    protected $pengelolaUserModel;
    public function __construct()
    {
        $this->pengelolaUserModel = new PengelolaUserModel();
    }

    // render halaman user manager  admn 
    public function usermanage()
    {
        // check status login
        $session = session();
        if (!$session->get('isLogin')) {
            return redirect()->to('login');
        }
        // mendapatkan data dari modedl 
        $data['users'] = $this->pengelolaUserModel->getAllPengguna();
        return view('backend/admin/user_management', $data);
    }

    public function tambahusr()
    {
        // check status login
        $session = session();
        if (!$session->get('isLogin')) {
            return redirect()->to('login');
        }
        return view('backend/admin/tambahuser');
    }

    public function prosestambahusr()
    {
        // import libarary validated
        $validation = \Config\Services::validation();

        //set valudation rules 
        $validation->setRules([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',

        ]);

        // catch data 
        $request = $this->request;
        $username = $request->getPost('username');
        $password = $request->getPost('password');
        $role = $request->getPost('role');
        // run check validation input 
        if (!$validation->withRequest($this->request)->run()) {
            // Validation failed, redirect back to same page 
            $errors = $validation->getErrors();
            session()->setFlashdata('errors', $errors); // Store errors in flash data
            return redirect()->to('tambahuser')->withInput();
        } else {
            // run commad insert 
            $this->pengelolaUserModel->tambahPengguna($username, $password, $role);
            return redirect()->to('user_management');
        }
    }

    // render view 
    public function editusr($id_pengguna)
    {
        // check status login
        $session = session();
        if (!$session->get('isLogin')) {
            return redirect()->to('login');
        }
        $data['users'] = $this->pengelolaUserModel->getPenggunaById($id_pengguna);
        return view('backend/admin/edituser', $data);
    }

    // process edit
    public function proseseditusr($id_pengguna)
    {
        $validation = \Config\Services::validation();

        //set valudation rules 
        $validation->setRules([
            'username' => 'required|alpha_numeric',
            'role' => 'required'
        ]);

        $passwordInput = $this->request->getPost('password');

        if (is_string($passwordInput)) {
            $password = md5($passwordInput);
        }

        // run validation
        if (!$validation->withRequest($this->request)->run()) {
            // Validation failed, redirect back with errors and input data
            $errors = $validation->getErrors();
            session()->setFlashdata('errors', $errors); // Store errors in flash data
            return redirect()->to('edituser/' . $id_pengguna)->withInput();
        } else {
    
            // check if the password blank 
            if ($this->request->getPost('password') === '') {
                //catch all data and store in array 
                $data = [
                    'username' => $this->request->getPost('username'),
                    'role' => $this->request->getPost('role')
                ];
                // perform update user without password 
                $this->pengelolaUserModel->proccessUpdate($id_pengguna, $data);

                return redirect()->to('user_management');
            } else {
                // catch all input and store in array 
                $data = [
                    'username' => $this->request->getPost('username'),
                    'password' => $password,
                    'role' => $this->request->getPost('role')
                ];

                $this->pengelolaUserModel->proccessUpdate($id_pengguna, $data);
            }

            return redirect()->to('user_management');
        }
    }


    public function hapususr($id_pengguna)
    {
        $this->pengelolaUserModel->delete($id_pengguna);
        return redirect()->to(base_url('user_management'));
    }
}
