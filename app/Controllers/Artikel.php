<?php

namespace App\Controllers;

use App\Models\PengelolaArtikelModel;

class Artikel extends BaseController
{
    protected $artikel;
    public function __construct()
    {
        $this->artikel = new PengelolaArtikelModel();
    }
    public function article()
    {
        $artikel_data = $this->artikel->getAllArtikel();
        return view('frontend/artikel', ['artikel_data'=> $artikel_data]);
    }
}

