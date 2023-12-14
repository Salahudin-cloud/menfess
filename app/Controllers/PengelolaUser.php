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

    public function usermanage()
    {
        $session = session();
        if (!$session->get('isLogin')) {
            return redirect()->to('login');
        }
        $data['users'] = $this->pengelolaUserModel->getAllPengguna();
        return view('backend/admin/user_management', $data);
    }

    public function tambahusr()
    {
        
        $session = session();
        if (!$session->get('isLogin')) {
            return redirect()->to('login');
        }
        return view('backend/admin/tambahuser');
    }

    public function prosestambahusr()
    {
        $validation = \Config\Services::validation();


        $validation->setRules([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',

        ]);

        $request = $this->request;
        $username = $request->getPost('username');
        $password = $request->getPost('password');
        $role = $request->getPost('role');
        if (!$validation->withRequest($this->request)->run()) {
            $errors = $validation->getErrors();
            session()->setFlashdata('errors', $errors); 
            return redirect()->to('tambahuser')->withInput();
        } else {
            $this->pengelolaUserModel->tambahPengguna($username, $password, $role);
            return redirect()->to('user_management');
        }
    }

    public function editusr($id_pengguna)
    {
        $session = session();
        if (!$session->get('isLogin')) {
            return redirect()->to('login');
        }
        $data['users'] = $this->pengelolaUserModel->getPenggunaById($id_pengguna);
        return view('backend/admin/edituser', $data);
    }

    public function proseseditusr($id_pengguna)
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'username' => 'required|alpha_numeric',
            'role' => 'required'
        ]);

        $passwordInput = $this->request->getPost('password');

        if (is_string($passwordInput)) {
            $password = md5($passwordInput);
        }

        if (!$validation->withRequest($this->request)->run()) {
            $errors = $validation->getErrors();
            session()->setFlashdata('errors', $errors); 
            return redirect()->to('edituser/' . $id_pengguna)->withInput();
        } else {
    
            if ($this->request->getPost('password') === '') {
                $data = [
                    'username' => $this->request->getPost('username'),
                    'role' => $this->request->getPost('role')
                ];
                $this->pengelolaUserModel->proccessUpdate($id_pengguna, $data);

                return redirect()->to('user_management');
            } else {

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
