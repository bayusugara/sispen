<?php

namespace App\Controllers;

use App\Models\PensiunModel;
use App\Models\PegawaiModel;

class Pensiun extends BaseController
{
    public function __construct()
    {
        $this->pensiunModel = new PensiunModel();
        $this->pegawaiModel = new PegawaiModel();
    }

    public function index()
    {
        $pensiun = $this->pegawaiModel->pensiun()->getResult();
        $data = [
            'title' => "Data Pegawai Pensiun",
            'pensiun' => $pensiun
        ];
        return view('pensiun/pensiun', $data);
    }

    public function detail($nik)
    {
        $data = [
            'title' => "Detail Pegawai Pensiun",
            'detail' => $this->pegawaiModel->tampil($nik)
        ];

        return view('pensiun/detailpegawai', $data);
    }

    public function whatsapp()
    {
        $nik = $this->request->getPost('nik');
        $data1 = [
            'nik' => $nik
        ];
        $data2 = [
            'title' => "Kirim Pesan Pensiun",
            'pensiun' => $this->pegawaiModel->tampil($nik)
        ];
        $this->pensiunModel->simpan($data1);
        return view('pensiun/kirim_whatsapp', $data2);
    }
}
