<?php

namespace App\Controllers;

use App\Models\MengelolaArtikelModel;

class Artikel extends BaseController
{
    public function article()
    {
        $artikel = new MengelolaArtikelModel();
        $artikel_data = $artikel-> findAll();
        return view('frontend/artikel', ['artikel_data'=> $artikel_data]);
    }
}

