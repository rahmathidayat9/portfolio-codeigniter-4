<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FooterModel;

class Footers extends BaseController
{
	protected $footerModel;

	public function __construct()
	{
		$this->footerModel = new FooterModel;	
	}

	public function index()
	{
		$data = [
			'footers'	=>	$this->footerModel->getAllData(),
		];

		return view('admin/footers/index',$data);
	}

	public function new()
	{
		return view('admin/footers/create');
	}

	public function create()
	{
		$data = [
				'title' => $this->request->getVar('title'),
				'description' => $this->request->getVar('description'),
				'address' => $this->request->getVar('address'),
				'phone' => $this->request->getVar('phone'),
				'email' => $this->request->getVar('email'),
				'copyright' => $this->request->getVar('copyright'),
			];

			$this->footerModel->insertData($data);

			session()->setFlashData('success','Data berhasil ditambah');
			return redirect()->to('/admin/footers');
	}

	public function edit($id)
	{
		$data = [
			'footer' => $this->footerModel->getFirstData($id),
		];

		return view('admin/footers/edit',$data);
	}

	public function update($id)
	{
		$data = [
				'title' => $this->request->getVar('title'),
				'description' => $this->request->getVar('description'),
				'address' => $this->request->getVar('address'),
				'phone' => $this->request->getVar('phone'),
				'email' => $this->request->getVar('email'),
				'copyright' => $this->request->getVar('copyright'),
			];

		$this->footerModel->updateData($data,$id);

		session()->setFlashData('success','Data berhasil diupdate');
		return redirect()->to('/admin/footers');
	}

	public function delete($id)
	{
		$this->footerModel->deleteData($id);

		session()->setFlashData('success','Data berhasil dihapus');
		return redirect()->to('/admin/footers');
	}
}
