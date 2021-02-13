<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{
	protected $userModel;

	public function __construct()
	{
		$this->userModel = new UserModel;
	} 

	public function index()
	{
		$data = [
			'users' => $this->userModel->getAllData(), 
		];

		return view('admin/users/index',$data);
	}

	public function new()
	{
		return view('admin/users/create');
	}

	public function create()
	{
		$data = [
			'name' => $this->request->getVar('name'),
			'username' => $this->request->getVar('username'),
			'email' => $this->request->getVar('email'),
			'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
		];

		$this->userModel->insertData($data);

		session()->setFlashData('success','Data berhasil ditambah');
		return redirect()->to('/admin/users');
	}

	public function edit($id)
	{
		$data = $this->db->table('users')->where('id',$id)->get()->getResult();
		return $this->response->setJSON($data);
		// $data = [
		// 	'user' => $this->userModel->getFirstData($id)
		// ];

		// return view('admin/users/edit',$data);
	}

	public function update($id)
	{
		if ($this->request->getVar('password')) {
			$password = password_hash($this->request->getVar('password'),PASSWORD_DEFAULT);
		}else{
			$password = $this->request->getVar('old_password');
		}

		$data = [
			'name' => $this->request->getVar('name'),
			'username' => $this->request->getVar('username'),
			'email' => $this->request->getVar('email'),
			'password' => $password,
		];

		$this->userModel->updateData($data,$id);

		session()->setFlashData('success','Data berhasil diupdate');
		return redirect()->to('/admin/users');
	}

	public function delete($id)
	{
		$this->userModel->deleteData($id);
		
		session()->setFlashData('success','Data berhasil dihapus');
		return redirect()->to('/admin/users');
	}
}
