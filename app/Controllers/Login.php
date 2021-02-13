<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class Login extends BaseController
{
	protected $loginModel;
	protected $validation;

	public function __construct()
	{
		$this->loginModel = new LoginModel;
	}

	public function authenticate()
	{
		if ($this->loginValidate()) {
			$email 		= $this->request->getVar('email');
			$password 	= $this->request->getVar('password');
			
			return $this->loginModel->doLogin($email,$password);
		}else{
			return view('auth/login');
		}	
	}

	protected function loginValidate()
	{
		$validate = $this->validate([
			'email' => 'required|valid_email',
			'password' => 'required',
		]);

		return $validate;
	}
}
