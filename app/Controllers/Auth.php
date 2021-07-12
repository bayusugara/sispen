<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
	public function __construct()
	{
		$this->auth = new AuthModel();
	}

	public function index()
	{
		$data = [
			'title' => "Silahkan Login"
		];
		return view('login', $data);
	}

	public function validasi()
	{
		$user = $this->request->getPost('username');
		$pass = $this->request->getPost('password');
		$cek = $this->auth->validasi($user);
		// mencocokkan password form dan password db
		// $verifikasi = password_verify($pass, $cek['password']);

		if (!$cek) {
			session()->setFlashdata('pesan', 'Username Anda Salah!');
			return redirect()->to('/');
		} elseif (password_verify($pass, $cek['password'])) {
			$data_session = [
				'nama' => $cek['nama'],
				'username' => $cek['username'],
				'level' => $cek['level'],
				'foto' => $cek['foto']
			];
			session()->set($data_session);
			return redirect()->to('/home');
		} else {
			session()->setFlashdata('pesan', 'Password Anda Salah!');
			return redirect()->to('/');
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/');
	}

	//--------------------------------------------------------------------

}
