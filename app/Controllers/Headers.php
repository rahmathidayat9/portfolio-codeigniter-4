<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Headers extends BaseController
{
	public function index()
	{
		$data = [
			'users' => $this->db->table('users')->get()->getResult(),
		];
		return view('admin/headers/index',$data);
	}
}
