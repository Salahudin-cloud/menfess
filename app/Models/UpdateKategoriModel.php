<?php

namespace App\Models;

use CodeIgniter\Model;


class UpdateKategoriModel extends Model
{
    protected $table = 'kateegori';
    protected $allowedFields = [
        'kategori_nama',
        'kategori_slug'
    ];


    public function updateKategori($id, $data)
    {
        return $this->db->table('kategori')
            ->where('kategori_id', $id)
            ->update($data);
    }

    public function getKategoriById($id)
    {
        return $this->db->table('kategori')
            ->where('kategori_id', $id)
            ->get()
            ->getRow();
    }
}
