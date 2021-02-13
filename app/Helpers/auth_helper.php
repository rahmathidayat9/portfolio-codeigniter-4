<?php 

function user()
{
	$db = \Config\Database::connect();
	return $db->table('users')->getWhere(['id' => session('user_id')])->getRow();
}