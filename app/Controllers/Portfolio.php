<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PortfolioModel;

class Portfolio extends BaseController
{
	protected $portfolioModel;

	public function __construct()
	{
		$this->portfolioModel = new PortfolioModel;	
	}

	public function index()
	{
		$data = [
			'portfolio'	=>	$this->portfolioModel->getAllData(),
		];

		return view('admin/portfolio/index',$data);
	}

	public function new()
	{
		return view('admin/portfolio/create');
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
			$file->move(ROOTPATH.'public/uploads/portfolio',$filename);

			$data = [
				'title' => $this->request->getVar('title'),
				'description' => $this->request->getVar('description'),
				'image' => $filename,
			];

			$this->portfolioModel->insertData($data);

			session()->setFlashData('success','Data berhasil ditambah');
			return redirect()->to('/admin/portfolio');
		}else{
			return view('admin/portfolio/create');
		}
	}

	public function edit($id)
	{
		$data = [
			'portfolio' => $this->portfolioModel->getFirstData($id),
		];

		return view('admin/portfolio/edit',$data);
	}

	public function update($id)
	{
		$data = [
			'title' => $this->request->getVar('title'),
			'description' => $this->request->getVar('description'),
		];

		$this->portfolioModel->updateData($data,$id);

		session()->setFlashData('success','Data berhasil diupdate');
		return redirect()->to('/admin/portfolio');
	}

	public function delete($id)
	{
		$portfolio = $this->portfolioModel->getFirstData($id);
		unlink(ROOTPATH.'public/uploads/portfolio/'.$portfolio->image);

		$this->portfolioModel->deleteData($id);

		session()->setFlashData('success','Data berhasil dihapus');
		return redirect()->to('/admin/portfolio');
	}
}
