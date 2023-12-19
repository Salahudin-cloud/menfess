<?php


namespace App\Models;

use CodeIgniter\Model;

class TambahKategoriModel extends Model
{
    protected $table = 'kateegori';
    protected $allowedFields = [
        'kategori_nama',
        'kategori_slug'
    ];


    public function tambahKategori($data)
    {
        return $this->db->table('kategori')->insert($data);
    }
}
