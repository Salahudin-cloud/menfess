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

    public function tambahusr()
    {
        return view('backend/admin/tambahuser');
    }

    public function prosestambahusr()
    {
        $mengelola_user = new MengelolaUserModel();
        $mengelola_user-> insert($this->request->getPost());
        return redirect()->to(base_url('user_management'));
    }

    public function editusr($id_pengguna = false)
    {
        $mengelola_user = new MengelolaUserModel();
        $data_edit = $mengelola_user-> find($id_pengguna);
        return view('backend/admin/edituser', ['data_edit'=>$data_edit]);
    }
    public function proseseditusr()
    {
        $mengelola_user = new MengelolaUserModel();
        $mengelola_user-> update($this->request->getPost('id_pengguna'),$this->request->getPost());
        return redirect()->to(base_url('user_management'));
    }
    public function hapususr($id_pengguna = false)
    {
        $mengelola_user = new MengelolaUserModel();
        $mengelola_user-> delete($id_pengguna);
        return redirect()->to(base_url('user_management'));
    }
}
