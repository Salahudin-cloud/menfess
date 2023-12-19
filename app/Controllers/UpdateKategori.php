<?php


namespace App\Controllers;

use App\Models\UpdateKategoriModel;

class UpdateKategori extends BaseController
{
    protected $updateKategoriModel;
    public function __construct()
    {
        $this->updateKategoriModel = new UpdateKategoriModel();
    }
    public function index($id)
    {
        $session = session();
        if (!$session->get('isLogin')) {
            return redirect()->to('login');
        }

        $data['kategori'] = $this->updateKategoriModel->getKategoriById($id);
        return view('backend/admin/updateKategori', $data);
    }

    public function updateKate($id)
    {

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

            return redirect()->to('updateKategori/' . $id)->withInput()->with('errors', $errors);
        }

        $data = [
            'kategori_nama' => $this->request->getPost('kategori'),
            'kategori_slug' => strtolower(url_title(json_encode($this->request->getPost('kategori'))))
        ];

        $this->updateKategoriModel->updateKategori($id, $data);

        return redirect()->to('kategori');
    }
}
