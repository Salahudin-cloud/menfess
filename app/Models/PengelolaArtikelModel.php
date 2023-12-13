<?php

namespace App\Models;

use CodeIgniter\Model;

class PengelolaArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'artikel_id';
    protected $returnType = 'object';
    protected $allowedFields = ['artikel_tanggal', 'artikel_judul', 'artikel_slug', 'artikel_konten', 'artikel_cover', 'artikel_status'];

    public function getAllArtikel()
    {
        return $this->findAll();
    }

    public function getArtikelById($artikel_id)
    {
        return $this->find($artikel_id);
    }

    public function processUpdateArtikel($id, $dataartikel)
    {
        $this->update($id, $dataartikel);
    }

    public function tambahArtikel($dataartikel)
    {
        return $this->insert($dataartikel);
    }
}
