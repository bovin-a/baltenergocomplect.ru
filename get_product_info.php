<?php
	// Просмотр информации о продукте
	if (isset($_GET['id'])) {

		$path = 'pages/products/'.$_GET['id'];
		
		// Подключение к БД
		include 'db_connect.php';
		
		$query = "SELECT mark FROM `cables_products` WHERE `id` = '".mysql_real_escape_string($_GET['id'])."'";
		$res = mysql_query($query);
		
		// Формируем массив информации о выбранных продуктах
		while ($row = mysql_fetch_assoc($res)) 
			$product_name = $row['mark'];
	}
?>