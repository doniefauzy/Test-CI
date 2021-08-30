<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class Home extends BaseController
{
	protected $pegawaiModel;
	public function __construct()
	{
		$this->pegawaiModel = new PegawaiModel();
	}
	public function index()
	{
		// $currentPage = $this->request->getVar('page_pegawai') ? $this->request->getVar('page_pegawai') : 1;
		$pegawai = $this->pegawaiModel->findAll();
		// $pager = $this->pegawaiModel->pager;
		$data = [
			'title' => 'Beranda',
			'pegawai' => $pegawai,
			// 'pager' => $pager,
			// 'currentPage' => $currentPage
		];
		return view('home', $data);
	}

	// function pegawai_list()
	// {
	// 	$sort_by = 'nama';
	// 	$sort_order = 'ASC';
	// 	$data = [
	// 		'pegawai_title' => $this->pegawaiModel->get_item_list($sort_by, $sort_order),
	// 		'sort_by' => $sort_by,
	// 		'sort_order' => $sort_order
	// 	];

	// 	return view('home', $data);
	// }
}
