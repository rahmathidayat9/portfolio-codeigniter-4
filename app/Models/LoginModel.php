<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'users';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['email','password'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
		'email'	=> 'required|valid_email',
		'username'	=> 'required'	
	];

	protected $validationMessages   = [
		'email' => [
			'required' => 'Email tidak harus diisi',
			'valid_email' => 'Email tidak valid',
		],

		'password' => [
			'required' => 'Password harus diisi',
		]
	];
	
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function doLogin($email,$password)
	{
		$user = $this->getWhere(['email' => $email])->getRow();
		
		if ($user) {
			if (password_verify($password,$user->password)) {
				session()->setFlashdata('info','Selamat datang '.$user->name);
				session()->set(['user_id' => $user->id]);
				return redirect()->to('/admin');
			}else{
				session()->setFlashData('error','Password salah');
				return redirect()->to('/login');
			}
		}else{
			session()->setFlashData('error','Email salah');
			return redirect()->to('/login');
		}
	}
}
