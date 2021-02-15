<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HeaderModel;
use App\Models\AboutModel;
use App\Models\FooterModel;

class Layout extends BaseController
{
	protected $hederModel;
	protected $aboutModel;
	protected $footerModel;

	public function __construct()
	{
		$this->headerModel = new HeaderModel;
		$this->aboutModel = new AboutModel;
		$this->footerModel = new FooterModel;	
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
			$this->headerModel->updateData(['is_active' => NULL],$this->request->getVar('id'));
			session()->setFlashData('error','Header di nonaktifkan');
		}
	}

	public function about()
	{
		$data = [
			'abouts' => $this->aboutModel->paginate(4,'about'),
			'pager'	=> $this->aboutModel->pager,
		];

		return view('admin/layout/about',$data);
	}

	public function setAbout()
	{
		if ($this->request->getVar('status')==NULL) {
			$this->db->transStart();
			$this->db->table('about')->where('is_active',1)->set(['is_active' => NULL])->update();
			$this->aboutModel->updateData(['is_active' => 1],$this->request->getVar('id'));
			$this->db->transComplete();
			session()->setFlashData('success','About di aktifkan');
		}else{
			$this->aboutModel->updateData(['is_active' => NULL],$this->request->getVar('id'));
			session()->setFlashData('error','About di nonaktifkan');
		}
	}

	public function footer()
	{
		$data = [
			'footers' => $this->footerModel->paginate(4,'footers'),
			'pager'	=> $this->footerModel->pager,
		];

		return view('admin/layout/footer',$data);
	}

	public function setFooter()
	{
		if ($this->request->getVar('status')==NULL) {
			$this->db->transStart();
			$this->db->table('footers')->where('is_active',1)->set(['is_active' => NULL])->update();
			$this->footerModel->updateData(['is_active' => 1],$this->request->getVar('id'));
			$this->db->transComplete();
			session()->setFlashData('success','Footer di aktifkan');
		}else{
			$this->footerModel->updateData(['is_active' => NULL],$this->request->getVar('id'));
			session()->setFlashData('error','Footer di nonaktifkan');
		}
	}
}
