<?php 
// fungsi untuk db query database
if (!function_exists('db')) {
	function db()
	{
		$connect = \Config\Database::connect();
		return $connect;
	}	
}

// mereturn data dari user yang berhasil login
if (!function_exists('user')) {
	function user()
	{
		$user = db()->table('users')->getWhere(['id' => session('user_id')])->getRow();
		return $user;
	}
}

// menghitung row / baris data dalam tabel
if (!function_exists('countRow')) {
	function countRow($table)
	{
		$count = db()->table($table)->countAll();
		return $count;
	}
}

//set Header Pada Halaman depan web 
if (!function_exists('setHeader')) {
	function setHeader()
	{
		$header = db()->table('headers')->getWhere(['is_active' => 1])->getRow();
		return $header;	
	}	
}

//set About Pada Halaman depan web 
if (!function_exists('setAbout')) {
	function setAbout()
	{
		$about = db()->table('about')->getWhere(['is_active' => 1])->getRow();
		return $about;	
	}	
}

//set Portfolio Pada Halaman depan web 
if (!function_exists('setPortfolio')) {
	function setPortfolio()
	{
		$portfolio = db()->table('portfolio')->get()->getResult();
		return $portfolio;	
	}	
}

//set Skills Pada Halaman depan web 
if (!function_exists('setSkill')) {
	function setSkill()
	{
		$skill = db()->table('skills')->get()->getResult();
		return $skill;	
	}	
}

//set Footer Pada Halaman depan web 
if (!function_exists('setFooter')) {
	function setFooter()
	{
		$footer = db()->table('footers')->getWhere(['is_active' => 1])->getRow();
		return $footer;	
	}	
}