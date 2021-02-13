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
		$this->validation = \Config\Services::validation();
	}

	public function authenticate()
	{
		// $this->validation->setRule('email','Email','required|valid_email');

		// $this->validation->setRules([
		// 	'email' => 'required|valid_email',
		// 	'password' => 'required',
		// ]);

		$validations = $this->validate([
						'email' => 'required|valid_email',
						'password' => 'required'
					]);
		
		if (!$validations) {
			return view('auth/login');
		}else{
			$email 		= $this->request->getVar('email');
			$password 	= $this->request->getVar('password');

			return $this->loginModel->doLogin($email,$password);	
		}
	}
}
