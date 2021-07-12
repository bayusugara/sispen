<?php

namespace App\Controllers;

use App\Models\UserModel;

class Pengguna extends BaseController
{
    public function __construct()
    {
        $this->modelpengguna = new UserModel();
    }

    public function index()
    {
        $tampil = $this->modelpengguna->tampil();
        $data = [
            'title' => "Data Pengguna",
            'pengguna' => $tampil
        ];
        return view('pengguna/pengguna', $data);
    }

    public function create()
    {
        session();
        $data = [
            'title' => "Tambah Pengguna",
            'valid' => \Config\Services::validation()
        ];
        return view('pengguna/tambahpengguna', $data);
    }

    public function simpan()
    {
        // session();
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => 'Username Wajib Diisi',
                    'is_unique' => 'Username Sudah Ada'
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
            return redirect()->to('/pengguna/create')->withInput();
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



        $nama = $this->request->getPost('nama');
        $username = $this->request->getPost('username');
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        $level = $this->request->getPost('level');
        $foto = $namaFoto;

        $data = [
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'level' => $level,
            'foto' => $foto
        ];

        $this->modelpengguna->simpan($data);
        return redirect()->to('/pengguna');
    }

    public function hapus($id)
    {
        if (session('level') != "superadmin") {
            return redirect()->to('/pengguna');
        }
        //cari gambar berdasarkan id
        $pengguna = $this->modelpengguna->tampil($id);

        //cek jika gambarnya user.png
        if ($pengguna['foto'] != 'user.png') {
            //hapus gambar
            unlink('img/' . $pengguna['foto']);
        }

        $this->modelpengguna->hapus($id);
        return redirect()->to('/pengguna');
    }

    public function edit($id)
    {
        session();
        $edit = $this->modelpengguna->tampil($id);
        $data = [
            'title' => "Edit Pengguna",
            'valid' => \Config\Services::validation(),
            'edit' => $edit
        ];

        return view('pengguna/editpengguna', $data);
    }

    public function update($id)
    {
        // session();
        $cek = $this->modelpengguna->tampil($id);
        if ($cek['username'] == $this->request->getPost('username')) {
            $ruless = 'required';
        } else {
            $ruless = 'required|is_unique[users.username]';
        }

        if (!$this->validate([
            'username' => [
                'rules' => $ruless,
                'errors' => [
                    'required' => 'Username Wajib Diisi',
                    'is_unique' => 'Username Sudah Ada'
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
            return redirect()->to('/pengguna/edit/' . $id)->withInput();
        }

        $fileFoto = $this->request->getFile('foto');
        //cek gambar, apakah tetap gambar lama
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getPost('fotoLama');
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

        $id = $id;
        $nama = $this->request->getPost('nama');
        $username = $this->request->getPost('username');
        // cek jika password kosong
        if ($this->request->getPost('password') == false) {
            $password = $cek['password'];
        } else {
            $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        }
        $level = $this->request->getPost('level');
        $foto = $namaFoto;

        $data = [
            'id' => $id,
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'level' => $level,
            'foto' => $foto
        ];

        $this->modelpengguna->simpan($data);

        //---------------------------------------set session setelah update-------------------------------------------->
        if ($cek['username'] == session('username')) {
            //Set session baru
            session()->set($data);
        }
        //---------------------------------------set session setelah update-------------------------------------------->

        return redirect()->to('/pengguna');
    }

    public function detail($id)
    {
        $data = [
            'title' => "Detail Pengguna",
            'detail' => $this->modelpengguna->tampil($id)
        ];

        return view('pengguna/detailpengguna', $data);
    }

    //--------------------------------------------------------------------

}
