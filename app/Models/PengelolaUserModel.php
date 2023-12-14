<?php

namespace App\Models;

use CodeIgniter\Model;

class PengelolaUserModel extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $allowedFields = ['username', 'password', 'role', 'status_pengguna'];


    public function getAllPengguna()
    {
        return $this->db->table('pengguna')->get()->getResult();
    }

 
    public function getPenggunaById($id_pengguna)
    {
        return $this->db->table('pengguna')->where('id_pengguna', $id_pengguna)->get()->getRow();
    }


    public function proccessUpdate($id, $data)
    {
        $this->db->table('pengguna')->where('id_pengguna', $id)->update($data);
    }

 
    public function tambahPengguna($username, $password, $role)
    {
        return $this->db->table('pengguna')->insert(['username' => $username, 'password' => md5($password), 'role' => $role]);
    }
}
