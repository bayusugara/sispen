<?php

namespace App\Controllers;

use App\Models\PegawaiModel;
use App\Models\PensiunModel;
use App\Models\UserModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->pegawaiModel = new PegawaiModel();
		$this->pensiunModel = new PensiunModel();
		$this->userModel = new UserModel();
	}
	public function index()
	{
		$hitung = $this->pegawaiModel->hitung();
		$hitung1 = $this->pensiunModel->hitung();
		$hitung2 = $this->userModel->hitung();
		$hitung3 = $this->pegawaiModel->hitungpensiun()->getResult();
		$data = [
			'title' => "Home",
			'hitung' => $hitung,
			'hitung1' => $hitung1,
			'hitung2' => $hitung2,
			'hitung3' => $hitung3,
		];
		return view('Home', $data);
	}

	//--------------------------------------------------------------------

}
