<?php

	// Подключение к БД
	include 'db_connect.php';
	
	// Выбираем все товары выбранной группы-подгруппы
	$query = "SELECT id,mark FROM `cables_products` WHERE `group` = '".mysql_real_escape_string($group)."' AND `subgroup` = '".mysql_real_escape_string($subgroup)."' ORDER BY id";
	$res = mysql_query($query);
	
	// Формируем массив информации о выбранных продуктах
	$products = array();	
	while ($row = mysql_fetch_assoc($res)) 
		$products[] = $row;
	
	// Формируем ответ в виде HTML строки
	$resultHTML  = '<h2 class="part_head"><span class="white_shadow">'.$group_name.$subgroup_name.'</span><span class="main_text">'.$group_name.$subgroup_name.'</span></h2>';
	$resultHTML .= '<div class="separator"></div>';
	
	foreach($products as $product)
	{
		
		if (file_exists($_SERVER['DOCUMENT_ROOT'].'/images/thumb_products_pic/'.$product['id'].'.png')) 
			$pic = $product['id'];
		else
			$pic = 'nopic';
			
		$resultHTML .= '<div class="product_wrapper"><div class="dark_pic_border"><a><img class="product_pic" src="/images/thumb_products_pic/'.$pic.'.png" alt="" /></a></div>';
		$resultHTML .= '<p class="product_info"><span class="select">'.$product['mark'].'</span></p>';
		$resultHTML .= '<a href="/product.php?id='.$product['id'].'" class="more_button">Подробнее</a></div>';
	}

	echo $resultHTML;
?>