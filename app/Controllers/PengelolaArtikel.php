<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\PengelolaArtikelModel;

use function PHPUnit\Framework\isEmpty;

class PengelolaArtikel extends BaseController
{
    protected $pengelola_artikel;
    protected $kategoriModel;
    public function __construct()
    {
        $this->pengelola_artikel = new PengelolaArtikelModel();
        $this->kategoriModel = new KategoriModel();
    }

    public function artikeladmin()
    {
        $session = session();
        if (!$session->get('isLogin')) {
            return redirect()->to('login');
        }
        $dataartikel['artickel'] = $this->pengelola_artikel->getAllArtikel();
        return view('backend/admin/articleadmin', $dataartikel);
    }

    public function tambahartik()
    {
        $session = session();
        if (!$session->get('isLogin')) {
            return redirect()->to('login');
        }

        $data['kategori'] = $this->kategoriModel->getAllKategori();
        return view('backend/admin/tambahartikel', $data);
    }

    public function prosestambahartik()
    {
        date_default_timezone_set('Asia/Jakarta');

        $validation = \Config\Services::validation();

        $validation->setRules([
            'artikel_judul ' => 'required|is_unique[artikel.artikel_judul ]',
            'artikel_konten' => 'required',
            'kategori_id' => 'required',
            'artikel_status' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            $errors = $validation->getErrors();
            return redirect()->to('tambahartikel')->withInput()->with('errors', $errors);
        } else {

            $title = $this->pengelola_artikel->getSpesificArticle($this->request->getPost('article_title'));

            if (count($title) > 0) {
                $errors['artikel_judul '] = 'Judul artikel sudah ada!.';

                return redirect()->to('tambahartikel')->withInput()->with('errors', $errors);
            } else {
                $articleCoverFile = $this->request->getFile('artikel_cover');
                if ($articleCoverFile->isValid()) {

                    $uploadPath = './assets/images';


                    $allowedTypes = ['jpg', 'jpeg', 'png'];
                    $fileExtension = $articleCoverFile->getExtension();

                    if (!in_array($fileExtension, $allowedTypes)) {
                        $errors['article_cover'] = 'hanya jpg, png, jpeg yang dibolehkan!';
                        return redirect()->to('tambahartikel')->withInput()->with('errors', $errors);
                    }


                    $articleCoverFile->move($uploadPath);


                    $artikel_cover = $articleCoverFile->getClientName();


                    $data = [
                        'kategori_id' => $this->request->getPost('kategori_id'),
                        'artikel_tanggal' => date('Y-m-d H:i:s'),
                        'artikel_judul' => $this->request->getPost('artikel_judul'),
                        'artikel_slug' => strtolower(url_title(json_encode($this->request->getPost('artikel_judul')))),
                        'artikel_konten' => $this->request->getPost('artikel_konten'),
                        'artikel_cover' =>  $artikel_cover,
                        'artikel_status' => $this->request->getPost('artikel_status')
                    ];


                    $this->pengelola_artikel->addNewArticle($data);

                    return redirect()->to('article');
                } else {

                    $errors['artikel_cover'] = 'tolong pilih cover untuk artikel';

                    return redirect()->to('tambahartikel')->withInput()->with('errors', $errors);
                }
            }
        }
    }

    public function editartik($artikel_id)
    {
        $session = session();
        if (!$session->get('isLogin')) {
            return redirect()->to('login');
        }
        $artikel['data'] = $this->pengelola_artikel->getArtikelById($artikel_id);
        $artikel['kategori'] = $this->kategoriModel->getAllKategori();
        return view('backend/admin/editartikel', $artikel);
    }

    public function proseseditartik($id)
    {
        $session = session();
        if (!$session->get('isLogin')) {
            return redirect()->to('/');
        }

        date_default_timezone_set('Asia/Jakarta');

        $validation = \Config\Services::validation();

        $validation->setRules(
            [
                'artikel_judul' => 'required',
                'artikel_konten' => 'required',
                'kategori_id' => 'required',
                'artikel_status' => 'required'
            ],
            [
                'artikel_judul' => [
                    'required' => 'jangan biarkan form judul kosong!'
                ],
                'artikel_konten' => [
                    'required' => 'jangan biarkan form konten artikel kosong!'
                ],
                'kategori_id' => [
                    'required' => 'jangan biarkan kategori artikel kosong!'
                ],
                'artikel_status' => [
                    'required' => 'jangan biarkan  artikel status  kosong!'
                ]
            ]
        );

        if (!$validation->withRequest($this->request)->run()) {

            $errors = $validation->getErrors();

            return redirect()->to('editartikel/' . $id)->withInput()->with('errors', $errors);
        } else {

            if (isEmpty($this->request->getFile('artikel_cover'))) {

                $data = [
                    'kategori_id' => $this->request->getPost('kategori_id'),
                    'artikel_tanggal' => date('Y-m-d H:i:s'),
                    'artikel_judul' => $this->request->getPost('artikel_judul'),
                    'artikel_slug' => strtolower(url_title(json_encode($this->request->getPost('artikel_judul')))),
                    'artikel_konten' => $this->request->getPost('artikel_konten'),
                    'artikel_status' => $this->request->getPost('artikel_status')
                ];

                $this->pengelola_artikel->updateArtikelData($id, $data);


                return redirect()->to('article');
            }

            $artikelCover = $this->request->getFile('artikel_cover');
            if ($artikelCover->isValid()) {

                $uploadPath = './assets/images';


                $allowedTypes = ['jpg', 'jpeg', 'png'];
                $fileExtension = $artikelCover->getExtension();

                if (!in_array($fileExtension, $allowedTypes)) {
                    $errors['artikel_cover'] = 'hanya jpg, png, jpeg yang dibolehkan!';
                    return redirect()->to('editartikel/' . $id)->withInput()->with('errors', $errors);
                }


                $artikel_cover = $artikelCover->getClientName();

                $data = [
                    'kategori_id' => $this->request->getPost('kategori_id'),
                    'artikel_tanggal' => date('Y-m-d H:i:s'),
                    'artikel_judul' => $this->request->getPost('artikel_judul'),
                    'artikel_slug' => strtolower(url_title(json_encode($this->request->getPost('artikel_judul')))),
                    'artikel_konten' => $this->request->getPost('artikel_konten'),
                    'artikel_cover' =>  $artikel_cover,
                    'artikel_status' => $this->request->getPost('artikel_status')
                ];


                if ($this->pengelola_artikel->getArticleCoverById($id) > 0) {

                    $oldArtikelCover = $this->pengelola_artikel->getArticleCoverById($id);
                    $artikelCoverName = $oldArtikelCover->artikel_cover;


                    if ($artikelCoverName) {

                        $articlePathToDelete = FCPATH . 'assets/images' . $artikelCoverName;


                        if (file_exists($articlePathToDelete)) {

                            unlink($articlePathToDelete);
                        }
                    }
                }


                $artikelCover->move($uploadPath);

                $this->pengelola_artikel->updateArtikelData($id, $data);

                return redirect()->to('article');
            }
        }
    }

    public function hapusartik($artikel_id)
    {
        $this->pengelola_artikel->deleteArtikel($artikel_id);
        return redirect()->to('article');
    }
}
