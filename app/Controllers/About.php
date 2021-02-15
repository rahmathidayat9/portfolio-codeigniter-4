<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AboutModel;

class About extends BaseController
{
	protected $aboutModel;

	public function __construct()
	{
		$this->aboutModel = new AboutModel;	
	}

	public function index()
	{
		$data = [
			'about'	=>	$this->aboutModel->getAllData(),
		];

		return view('admin/about/index',$data);
	}

	public function new()
	{
		return view('admin/about/create');
	}

	public function create()
	{
		$validate = $this->validate([
			'file' => [
				'uploaded[file]',
				'mime_in[file,image/jpg,image/png,image/jpeg,image/svg]',
				'max_size[file,4096]',
			],
		]);

		if ($validate) {
			$file = $this->request->getFile('file');
			$filename = $file->getRandomName();
			$file->move(ROOTPATH.'public/uploads/about',$filename);

			$data = [
				'title' => $this->request->getVar('title'),
				'description' => $this->request->getVar('description'),
				'image' => $filename,
				'name' => $this->request->getVar('name'),
				'email' => $this->request->getVar('email'),
				'role' => $this->request->getVar('role'),
				'phone' => $this->request->getVar('phone'),
			];

			$this->aboutModel->insertData($data);

			session()->setFlashData('success','Data berhasil ditambah');
			return redirect()->to('/admin/about');
		}else{
			return view('admin/about/create');
		}
	}

	public function edit($id)
	{
		$data = [
			'about' => $this->aboutModel->getFirstData($id),
		];

		return view('admin/about/edit',$data);
	}

	public function update($id)
	{
		$data = [
			'title' => $this->request->getVar('title'),
			'description' => $this->request->getVar('description'),
			'name' => $this->request->getVar('name'),
			'email' => $this->request->getVar('email'),
			'role' => $this->request->getVar('role'),
			'phone' => $this->request->getVar('phone'),
		];

		$this->aboutModel->updateData($data,$id);

		session()->setFlashData('success','Data berhasil diupdate');
		return redirect()->to('/admin/about');
	}

	public function delete($id)
	{
		$about = $this->aboutModel->getFirstData($id);
		unlink(ROOTPATH.'public/uploads/about/'.$about->image);

		$this->aboutModel->deleteData($id);

		session()->setFlashData('success','Data berhasil dihapus');
		return redirect()->to('/admin/about');
	}
}
