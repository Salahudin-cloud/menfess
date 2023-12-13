<?php

namespace App\Controllers;

use App\Models\PengelolaArtikelModel;

class PengelolaArtikel extends BaseController
{
    protected $pengelola_artikel;

    public function __construct()
    {
        $this->pengelola_artikel = new PengelolaArtikelModel();
    }

    public function artikeladmin()
    {
        $dataartikel['artickel'] = $this->pengelola_artikel->getAllArtikel();
        return view('backend/admin/articleadmin', $dataartikel);
    }

    public function tambahartik()
    {
        $dataartikel = $this->pengelola_artikel->getAllArtikel();
        $validation = \Config\Services::validation();
        return view('backend/admin/tambahartikel', ['data_artikel' => $dataartikel, 'validation' => $validation]);
    }

    public function prosestambahartik()
    {
        if (!$this->validate([
            'artikel_cover' => [
                'rules' => 'uploaded[artikel_cover]|is_image[artikel_cover]|mime_in[artikel_cover,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Silakan Masukkan Gambar Artikelnya Terlebih Dahulu',
                    'is_image' => 'File Yang Anda Pilih Bukan Gambar',
                    'mime_in' => 'Gambar Yang Anda Masukkan Tidak Valid, Silakan Masukkan File berupa jpg/jpeg/png'
                ]
            ]
        ])) {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            $file_gambar = $this->request->getFile('artikel_cover');
            $file_gambar->move('assets/images/');
            $nama_file = $file_gambar->getName();
            $data = [
                'artikel_tanggal' => $this->request->getPost("artikel_tanggal"),
                'artikel_judul' => $this->request->getPost("artikel_judul"),
                'artikel_slug' => $this->request->getPost("artikel_slug"),
                'artikel_konten' => $this->request->getPost("artikel_konten"),
                'artikel_cover' => $nama_file,
                'artikel_status' => $this->request->getPost("artikel_status")
            ];
            $this->pengelola_artikel->tambahArtikel($data);

            session()->setFlashdata('success', 'Data Berhasil Disimpan');
            return redirect()->to(base_url('article'));
        }
    }

    public function editartik($artikel_id = false)
    {
        $artikel_edit = $this->pengelola_artikel->getArtikelById($artikel_id);
        return view('backend/admin/editartikel', ['artikel_edit' => $artikel_edit]);
    }

    public function proseseditartik()
    {
        $id = $this->request->getPost('artikel_id');
        $data = [
            'artikel_tanggal' => $this->request->getPost("artikel_tanggal"),
            'artikel_judul' => $this->request->getPost("artikel_judul"),
            'artikel_slug' => $this->request->getPost("artikel_slug"),
            'artikel_konten' => $this->request->getPost("artikel_konten"),
            'artikel_cover' => $this->request->getPost("artikel_cover"),
            'artikel_status' => $this->request->getPost("artikel_status")
        ];

        $this->pengelola_artikel->processUpdateArtikel($id, $data);

        return redirect()->to(base_url('article'));
    }

    public function hapusartik($artikel_id = false)
    {
        $this->pengelola_artikel->delete($artikel_id);
        return redirect()->to(base_url('article'));
    }
}
