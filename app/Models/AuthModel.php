<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'users';

    public function validasi($user = FALSE)
    {
        return $this->where(['username' => $user])->first();
    }
}
