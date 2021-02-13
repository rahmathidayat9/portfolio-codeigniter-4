<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Profile extends BaseController
{
	protected $userModel;

	public function __construct()
	{
		$this->userModel = new UserModel;
	}

	public function index()
	{
		return view('profile/index');
	}

	public function updateProfile()
	{
		if ($this->updateProfileValidate()) {	
			$data = [
				'name' => $this->request->getVar('name'),
				'username' => $this->request->getVar('username'),
				'email' => $this->request->getVar('email'),
			];

			$this->userModel->updateData($data,user()->id);

			session()->setFlashData('success','Profil berhasil diupdate');
			return redirect()->to('/admin/profile');	
		}else{
			return view('profile/index');
		}
	}

	protected function updateProfileValidate()
	{
		$validate = $this->validate([
			'name' => 'required|max_length[25]',
			'username' => 'required|max_length[25]',
			'email' => 'required|valid_email',
		]);

		return $validate;
	}

	public function editPassword()
	{
		return view('profile/change-password');
	}

	public function updatePassword()
	{
		if ($this->updatePasswordValidate()) {
			$data = [
				'password' => password_hash($this->request->getVar('new_password'),PASSWORD_DEFAULT),
			];

			$this->userModel->updateData($data,user()->id);

			session()->setFlashData('success','Password berhasil diubah');
			return redirect()->to('/admin/change-password');	
		}else{
			return view('profile/change-password');
		}
	}	

	protected function updatePasswordValidate()
	{
		$validate = $this->validate([
			'old_password' => ['label' => 'Password Lama' , 'rules' => 'required'],
			'new_password' => ['label' => 'Password Baru' , 'rules' => 'required'],
			'confirm_new_password' => ['label' => 'Konfirmasi Password','rules' => 'required|matches[new_password]'],
		]);

		return $validate;
	} 
}