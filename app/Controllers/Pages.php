<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | andy',
		];
		echo view('pages/home', $data);
	}
	public function about()
	{
		$data = [
			'title' => 'About | andy'
		];
		echo view('pages/about', $data);
	}

	public function contact()
	{
		$data = [
			'title' => 'About | andy',
			'alamat' => [
				[
					'tipe' => 'Rumah',
					'alamat' => 'Jl.Pettarani no.16',
					'Kota' => 'Makassar',
				],
				 [
					'tipe' => 'kantor',
					'alamat' => 'Jl.Pettarani no.6',
					'Kota' => 'Sidrap',
				]
			]
		];

		echo view('pages/contact', $data);
	}
}
