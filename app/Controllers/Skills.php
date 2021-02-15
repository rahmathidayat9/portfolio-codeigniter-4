<?php

namespace App\Controllers;
use App\Models\SkillModel;

use App\Controllers\BaseController;

class Skills extends BaseController
{
	protected $skillModel;

	public function __construct()
	{
		$this->skillModel = new SkillModel;
	}

	public function index()
	{
		$data = [
			'skills' => $this->skillModel->getAllData(),
		];

		return view('admin/skills/index',$data);
	}

	public function new()
	{
		return view('admin/skills/create');
	}

	public function create()
	{
		$data = [
			'name' => $this->request->getVar('name'),
		];

		$this->skillModel->insertData($data);

		session()->setFlashData('success','Data berhasil ditambah');
		return redirect()->to('/admin/skills');
	}

	public function edit($id)
	{
		$data = [
			'skill' => $this->skillModel->getFirstData($id),
		];

		return view('admin/skills/edit',$data);
	}

	public function update($id)
	{
		$data = [
			'name' => $this->request->getVar('name'),
		];

		$this->skillModel->updateData($data,$id);

		session()->setFlashData('success','Data berhasil diubah');
		return redirect()->to('/admin/skills');
	}

	public function delete($id)
	{
		$this->skillModel->deleteData($id);

		session()->setFlashData('success','Data berhasil dihapus');
		return redirect()->to('/admin/skills');
	}
}
