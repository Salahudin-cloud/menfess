<?php

namespace App\Models;

use CodeIgniter\Model;

class PengelolaArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $allowedFields = ['kategori_id', 'artikel_tanggal', 'artikel_judul', 'artikel_slug', 'artikel_konten', 'artikel_cover', 'artikel_status'];

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

    public function updateArtikelData($id, $data)
    {
        return $this->db->table('artikel')
            ->where('artikel_id', $id)
            ->update($data);
    }


    public function getArticleCoverById($id)
    {
        return $this->db->table('artikel')
            ->where('artikel_id', $id)
            ->get()
            ->getRow();
    }

    public function getSpesificArticle($artikel_judul)
    {
        return $this->db->table('artikel')
            ->where('artikel_judul', $artikel_judul)
            ->get()->getResult();
    }

    public function addNewArticle($data)
    {
        return $this->table('artikel')->insert($data);
    }

    public function  deleteArtikel($id)
    {
        return $this->db->table('artikel')
            ->where('artikel_id', $id)->delete();
    }
}
