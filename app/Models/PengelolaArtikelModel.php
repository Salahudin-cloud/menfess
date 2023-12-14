<?php

namespace App\Models;

use CodeIgniter\Model;

class PengelolaArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $allowedFields = ['artikel_tanggal', 'artikel_judul', 'artikel_slug', 'artikel_konten', 'artikel_cover', 'artikel_status'];

    public function getAllArtikel()
    {
        $builder = $this->db->table('artikel');
        $result = $builder->select('*')
            ->select('kategori.kategori_nama')
            ->join('kategori', 'kategori.kategori_id = artikel.kategori_id')
            ->get()
            ->getResult();
        return $result;
    }


    public function getArtikelById($artikel_id)
    {
        $builder = $this->db->table('artikel');
        $result = $builder->where('artikel_id', $artikel_id)
            ->select('*')
            ->select('kategori.kategori_nama')
            ->join('kategori', 'kategori.kategori_id = artikel.kategori_id')
            ->get()
            ->getRow();
        return $result;
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
