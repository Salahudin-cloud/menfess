<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Kategori extends BaseController
{

    protected $kategoriModel;
    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
    }

    // render view 
    public function index()
    {
        // melakukan query 
        $query['data'] = $this->kategoriModel->getAllKategori();
        return view('backend/admin/kategori', $query);
    }

}
