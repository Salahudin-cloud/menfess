<?php


namespace App\Controllers;

use App\Models\TambahKategoriModel;

class TambahKategori extends BaseController
{
    protected $tambahKategoriModel;

    public function __construct()
    {
        $this->tambahKategoriModel = new TambahKategoriModel();
    }

    public function index()
    {
        $session = session();
        if (!$session->get('isLogin')) {
            return redirect()->to('login');
        }
        return view('backend/admin/tambahKategori');
    }


    public function tambahKategoriProc()
    {
        $session = session();

        $validate = \Config\Services::validation();

        $validate->setRules(
            [
                'kategori' => 'required'
            ],
            [
                'kategori'  => [
                    'required' => 'Jangan Biarkan kategori kosong!'
                ]
            ]
        );


        if (!$validate->withRequest($this->request)->run()) {

            $errors = $validate->getErrors();

            return redirect()->to('tambahKategori')->withInput()->with('errors', $errors);
        }


        $data = [
            'kategori_nama' => $this->request->getPost('kategori'),
            'kategori_slug' => strtolower(url_title(json_encode($this->request->getPost('kategori'))))
        ];

        $this->tambahKategoriModel->tambahKategori($data);

        return redirect()->to('kategori');
    }
}
