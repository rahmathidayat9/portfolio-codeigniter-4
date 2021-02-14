<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HeaderModel;

class Layout extends BaseController
{
	protected $hederModel;

	public function __construct()
	{
		$this->headerModel = new HeaderModel;
	}

	public function header()
	{
		$data = [
			'headers' => $this->headerModel->paginate(4,'headers'),
			'pager'	=> $this->headerModel->pager,
		];

		return view('admin/layout/header',$data);
	}

	public function setHeader()
	{
		if ($this->request->getVar('status')==NULL) {
			$this->db->transStart();
			$this->db->table('headers')->where('is_active',1)->set(['is_active' => NULL])->update();
			$this->headerModel->updateData(['is_active' => 1],$this->request->getVar('id'));
			$this->db->transComplete();
			session()->setFlashData('success','Header di aktifkan');
		}else{
			$this->db->transStart();
			$this->headerModel->updateData(['is_active' => NULL],$this->request->getVar('id'));
			$this->db->transComplete();
			session()->setFlashData('error','Header di nonaktifkan');
		}
	}
}
