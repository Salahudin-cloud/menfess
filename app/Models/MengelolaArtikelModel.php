<?php

namespace App\Models;

use CodeIgniter\Model;

class MengelolaArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id_artikel';
    protected $returnType = 'object';
    protected $allowedFields = ['judul_artikel', 'tanggal_artikel', 'kategori_artikel', 'gambar_artikel', 'penjelasan_singkatartikel', 'isi_artikel', 'status_artikel'];
}