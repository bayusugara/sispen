<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'level', 'nama', 'foto'];

    public function tampil($id = false)
    {
        if ($id == false) {
            return $this->orderBy('id', 'DESC')->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

    public function simpan($data)
    {
        $this->save($data);
    }

    public function hapus($id)
    {
        $this->delete($id);
    }

    public function edit($data)
    {
        $this->save($data);
    }

    public function hitung()
    {
        return $this->countAll();
    }
}
