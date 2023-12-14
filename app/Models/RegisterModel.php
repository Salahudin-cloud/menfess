<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $allowedFields = ['username', 'password', 'role'];


    public function regis($username, $password, $role)
    {
        return $this->db->table('pengguna')->insert([
            'username' => $username,
            'password' => md5($password),
            'role' => $role
        ]);
    }


 
    public function isUsernameExist($username)
    {
        $query =  $this->db->table('pengguna')->where('username', $username)->get()->getRow();

        if (!empty($query)) {
            return true;
        }

        return false;
    }
}
