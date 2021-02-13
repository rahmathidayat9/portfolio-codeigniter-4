<?php 

function countRow($table)
{
	$db = \Config\Database::connect();
	return $db->table($table)->countAll();
}