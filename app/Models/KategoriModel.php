<?php


namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $allowedFields = [
        'kategori_nama',
        'kategori_slug'
    ];


    public function getAllKategori()
    {
        return $this->db->table('kategori')->get()->getResult();
    }

    public function deleteKategori($id)
    {
        return $this->db->table('kategori')->where('kategori_id', $id)->delete();
    }
}
