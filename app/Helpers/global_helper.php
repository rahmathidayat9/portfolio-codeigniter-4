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