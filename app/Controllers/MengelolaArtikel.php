<?php


namespace App\Controllers;

use App\Models\MengelolaArtikelModel;

class MengelolaArtikel extends BaseController
{
    public function artikeladmin()
    {
        $mengelola_artikel = new MengelolaArtikelModel();
        $data_artikel = $mengelola_artikel->findAll();
        return view('backend/admin/articleadmin',['data_artikel'=>$data_artikel]);
    }
    public function tambahartik()
    {
        return view('backend/admin/tambahartikel');
    }
    public function prosestambahartik()
    {
        $mengelola_artikel = new MengelolaArtikelModel();
        $mengelola_artikel-> insert($this->request->getPost());
        return redirect()->to(base_url('article'));
    }
    public function editartik($id_artikel = false)
    {
        $mengelola_artikel = new MengelolaArtikelModel();
        $artikel_edit = $mengelola_artikel-> find($id_artikel);
        return view('backend/admin/editartikel', ['artikel_edit'=>$artikel_edit]);
    }
    public function proseseditartik()
    {
        $mengelola_artikel = new MengelolaArtikelModel();
        $mengelola_artikel-> update($this->request->getPost('id_artikel'), $this->request->getPost());
        return redirect()->to(base_url('article'));
    }
    public function hapusartik($id_artikel = false)
    {
        $mengelola_artikel = new MengelolaArtikelModel();
        $mengelola_artikel-> delete($id_artikel);
        return redirect()->to(base_url('article'));
    }
}
