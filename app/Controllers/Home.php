<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$motorModel = new \App\Models\MotorModel();
		$motor = $motorModel->findAll();
		return view('index', ['motor' => $motor]);
	}

	//--------------------------------------------------------------------

}
