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