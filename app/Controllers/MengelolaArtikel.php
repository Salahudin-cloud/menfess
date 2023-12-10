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
        $mengelola_artikel = new MengelolaArtikelModel();
        $data_artikel = $mengelola_artikel->findAll();
        $validation = \Config\Services::validation();
        return view('backend/admin/tambahartikel',['data_artikel'=>$data_artikel, 'validation'=>$validation]);
    }
    public function prosestambahartik()
    {
        if(!$this->validate([
            'gambar_artikel'=> [
                'rules'=> 'uploaded[gambar_artikel]|is_image[gambar_artikel]|mime_in[gambar_artikel,image/jpg,image/jpeg,image/png]',
                'errors'=> [
                    'uploaded'=>'Silakan Masukkan Gambar Artikelnya Terlebih Dahulu',
                    'is_image'=>'File Yang Anda Pilih Bukan Gambar',
                    'mime_in'=> 'Gambar Yang Anda Masukkan Tidak Valid, Silakan Masukkan File berupa jpg/jpeg/png'
                ]
            ]
        ]

        )){
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            $file_gambar = $this->request->getFile('gambar_artikel');
            $file_gambar->move('assets/images/');
            $nama_file = $file_gambar->getName();
            $a = new MengelolaArtikelModel();
            $data = [
                'judul_artikel' => $this->request->getVar("judul_artikel"), 
                'tanggal_artikel' => $this->request->getVar("tanggal_artikel"), 
                'kategori_artikel' => $this->request->getVar("kategori_artikel"), 
                'gambar_artikel' => $nama_file, 
                'penjelasan_singkatartikel' => $this->request->getVar("penjelasan_singkatartikel"), 
                'isi_artikel' => $this->request->getVar("isi_artikel"), 
                'status_artikel' => $this->request->getVar("status_artikel")
            ];
            $a -> save($data);

            session()-> setFlashdata('success', 'Data Berhasil Disimpan');
            return redirect()->to(base_url('article'));
        }
        
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