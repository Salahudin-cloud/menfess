<?php

namespace App\Controllers;

class HalamanTambahArtikel extends BaseController
{
      // render halaman dashboar admin  admn 
    public function tambahartik()
    {
        return view('backend/admin/tambahartikel');
    }
}
