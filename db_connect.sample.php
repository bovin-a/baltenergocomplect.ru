<?php

	$connection = mysql_connect('host', 'login', 'password');
	if (!$connection) {die('MySql error: ' . mysql_error());}
	mysql_select_db('db_name', $connection);
	$query = "SET NAMES UTF8;";
	mysql_query($query);
