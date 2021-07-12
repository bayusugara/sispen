<?php

namespace App\Models;

use CodeIgniter\Model;

class PensiunModel extends Model
{
    protected $table = 'sukses_kirim';
    protected $useTimestamps = true;
    protected $allowedFields = ['nik'];

    public function tampil($nik = false)
    {
        if ($nik == false) {
            return $this->orderBy('created_at', 'DESC')->findAll();
        }
        return $this->where(['nik' => $nik])->first();
    }

    public function simpan($data)
    {
        $this->insert($data);
    }

    public function tampil_pensiun()
    {
        $this->select('*, sukses_kirim.created_at');
        $this->join('pegawai', 'pegawai.nik = sukses_kirim.nik');
        $this->orderBy('sukses_kirim.created_at', 'DESC');
        return $this->get();
    }

    public function hitung()
    {
        return $this->countAll();
    }
}
