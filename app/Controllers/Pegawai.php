<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    public function __construct()
    {
        $this->modelpegawai = new PegawaiModel();
    }

    public function index()
    {
        $tampil = $this->modelpegawai->tampil();
        $data = [
            'title' => "Data Pegawai",
            'pegawai' => $tampil
        ];
        return view('pegawai/pegawai', $data);
    }

    public function create()
    {
        session();
        $data = [
            'title' => "Tambah Pegawai",
            'valid' => \Config\Services::validation()
        ];
        return view('pegawai/tambahpegawai', $data);
    }

    public function simpan()
    {
        // session();
        if (!$this->validate([
            'nik' => [
                'rules' => 'required|is_unique[pegawai.nik]',
                'errors' => [
                    'required' => 'Nik Wajib Diisi',
                    'is_unique' => 'Nik Sudah Ada'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => "Ukuran Gambar Terlalu Besar",
                    'is_image' => "Yang Anda Pilih Bukan Gambar",
                    'mime_in' => "Yang Anda Pilih Bukan Gambar"
                ]
            ]
        ])) {
            return redirect()->to('/pegawai/create')->withInput();
        }
        //ambil gambar
        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = "user.png";
        } else {
            //ambil nama file
            $namaFoto = $fileFoto->getRandomName();
            //pindahkan file ke folder img
            $fileFoto->move('img', $namaFoto);
        }



        $nik = $this->request->getPost('nik');
        $nama = $this->request->getPost('nama');
        $jenis_kelamin = $this->request->getPost('jenis_kelamin');
        $tanggal_lahir = date('Y-m-d', strtotime($this->request->getPost('tanggal_lahir')));
        $nohp = $this->request->getPost('nohp');
        $email = $this->request->getPost('email');
        $alamat = $this->request->getPost('alamat');
        $foto = $namaFoto;

        $data = [
            'nik' => $nik,
            'nama' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'tanggal_lahir' => $tanggal_lahir,
            'nohp' => $nohp,
            'email' => $email,
            'alamat' => $alamat,
            'foto' => $foto
        ];

        $this->modelpegawai->simpan($data);
        return redirect()->to('/pegawai');
    }

    public function hapus($nik)
    {
        if (session('level') != "superadmin") {
            return redirect()->to('/pegawai');
        }
        //cari gambar berdasarkan id
        $pegawai = $this->modelpegawai->tampil($nik);

        //cek jika gambarnya user.png
        if ($pegawai['foto'] != 'user.png') {
            //hapus gambar
            unlink('img/' . $pegawai['foto']);
        }

        $this->modelpegawai->hapus($nik);
        return redirect()->to('/pegawai');
    }

    public function edit($id)
    {
        session();
        $edit = $this->modelpegawai->tampil($id);
        $data = [
            'title' => "Edit Pegawai",
            'valid' => \Config\Services::validation(),
            'edit' => $edit
        ];

        return view('Pegawai/editpegawai', $data);
    }

    public function update($nik)
    {
        // session();
        $cek = $this->modelpegawai->tampil($nik);
        if ($cek['nik'] == $this->request->getPost('nik')) {
            $ruless = 'required';
        } else {
            $ruless = 'required|is_unique[pegawai.nik]';
        }

        if (!$this->validate([
            'nik' => [
                'rules' => $ruless,
                'errors' => [
                    'required' => 'Nama Pegawai Wajib Diisi',
                    'is_unique' => 'Nama Pegawai Sudah Ada'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => "Ukuran Gambar Terlalu Besar",
                    'is_image' => "Yang Anda Pilih Bukan Gambar",
                    'mime_in' => "Yang Anda Pilih Bukan Gambar"
                ]
            ]
        ])) {
            return redirect()->to('/pegawai/edit/' . $nik)->withInput();
        }

        $fileFoto = $this->request->getFile('foto');
        //cek gambar, apakah tetap gambar lama
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            $namaFoto = $fileFoto->getRandomName();
            //pindahkan gambar
            $fileFoto->move('img', $namaFoto);

            $fotolama = $this->request->getPost('fotoLama');
            //hapus file yang lama
            if ($fotolama != "user.png") {
                unlink('img/' . $fotolama);
            }
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tanggal_lahir' => date('Y-m-d', strtotime($this->request->getPost('tanggal_lahir'))),
            'nohp' => $this->request->getPost('nohp'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
            'foto' => $namaFoto
        ];

        $this->modelpegawai->edit($nik, $data);
        return redirect()->to('/pegawai/detail/' . $nik);
    }

    public function detail($nik)
    {
        $data = [
            'title' => "Detail Pegawai",
            'detail' => $this->modelpegawai->tampil($nik)
        ];

        return view('pegawai/detailpegawai', $data);
    }

    //--------------------------------------------------------------------

}
