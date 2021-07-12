<?php

namespace App\Controllers;

use App\Models\PensiunModel;
use App\Models\PegawaiModel;

class Laporan extends BaseController
{
    public function __construct()
    {
        $this->pensiunModel = new PensiunModel();
        $this->pegawaiModel = new PegawaiModel();
    }

    public function index()
    {
        $sukses = $this->pensiunModel->tampil_pensiun()->getResult();
        $data = [
            'title' => "Laporan Sukses",
            'sukses' => $sukses
        ];
        return view('laporan/sukses', $data);
    }

    public function detail($nik)
    {
        $data = [
            'title' => "Detail Pegawai Pensiun",
            'detail' => $this->pegawaiModel->tampil($nik)
        ];

        return view('laporan/detailpegawai', $data);
    }
}
