<?php 

function db()
{
	$connect = \Config\Database::connect();
	return $connect;
}

function countRow($table)
{
	$count = db()->table($table)->countAll();
	return $count;
}

function setHeader()
{
	$header = db()->table('headers')->getWhere(['is_active' => 1])->getRow();
	return $header;
	
}