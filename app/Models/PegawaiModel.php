<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'nik';
    protected $useTimestamps = true;
    protected $allowedFields = ['nik', 'nama', 'jenis_kelamin', 'tanggal_lahir', 'email', 'nohp', 'alamat', 'foto'];

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

    public function hapus($nik)
    {
        $this->delete($nik);
    }

    public function edit($nik, $data)
    {
        $this->update($nik, $data);
    }

    public function pensiun()
    {
        return $this->query("SELECT *, TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) AS umur FROM pegawai WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) >= 60 ORDER BY tanggal_lahir DESC");
    }

    public function hitungpensiun()
    {
        return $this->query("SELECT COUNT(*) AS jumlah FROM (select nik, nama, tanggal_lahir, TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) AS umur from pegawai WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) >= 60)  as dummy_table");
    }

    public function hitung()
    {
        return $this->countAll();
    }
}
