<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HeaderModel;

class Headers extends BaseController
{
	protected $headerModel;

	public function __construct()
	{
		$this->headerModel = new HeaderModel;
		helper('filesystem');
	}

	public function index()
	{
		$data = [
			'headers' => $this->headerModel->getAllData(),
		];
		
		return view('admin/headers/index',$data);
	}

	public function new()
	{
		return view('admin/headers/create');
	}

	public function create()
	{
		$validate =	$this->validate([
						'file' => [
							'uploaded[file]',
							'mime_in[file,image/jpg,image/png,image/gif,image/jpeg]',
							'max_size[file,4096]',
						],
					]);

		if ($validate) {
			$file = $this->request->getFile('file');
			$newName = $file->getRandomName();
			$file->move(ROOTPATH.'public/uploads/headers',$newName);
			
			$data = [
				'title' => $this->request->getVar('title'),
				'navbar_title' => $this->request->getVar('navbar_title'),
				'up_text' => $this->request->getVar('up_text'),
				'down_text' => $this->request->getVar('down_text'),
				'image' => $newName,
			];

			$this->headerModel->insertData($data);

			session()->setFlashData('success','Data berhasil ditambah');
			return redirect()->to('/admin/headers');
		}else{
			return view('admin/headers/create');
		}
	}

	public function edit($id)
	{
		$data = [
			'header' => $this->headerModel->getFirstData($id),
		];

		return view('admin/headers/edit',$data);
	}

	public function update($id)
	{
		$data = [
			'title' => $this->request->getVar('title'),
			'navbar_title' => $this->request->getVar('navbar_title'),
			'up_text' => $this->request->getVar('up_text'),
			'down_text' => $this->request->getVar('down_text'),
		];

		$this->headerModel->updateData($data,$id);
		
		session()->setFlashData('success','Data berhasil diupdate');
		return redirect()->to('/admin/headers');
	}

	public function delete($id)
	{
		$header = $this->headerModel->getFirstData($id);
		unlink(ROOTPATH.'public/uploads/headers/'.$header->image);

		$this->headerModel->deleteData($id);

		session()->setFlashData('success','Data berhasil dihapus');
		return redirect()->to('/admin/headers');
	}
}
