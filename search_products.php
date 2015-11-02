<?php

	// Подключение к БД
	include 'db_connect.php';
	
	// Выбираем все товары
	$query = "SELECT id,mark FROM `cables_products` ORDER BY id";
	$res = mysql_query($query);
	
	// Формируем массив информации о выбранных продуктах
	$products = array();	
	while ($row = mysql_fetch_assoc($res)) 
		$products[] = $row;
	
	// Выполняем поиск и формируем ответ в виде HTML строки
	
	$search_words = explode(' ',strip_tags($_GET['cable']));
	$finded = false;
	$resultHTML = '';
	
	//setlocale(LC_ALL, 'ru_RU');
	
	foreach($products as $product)
	{
		foreach($search_words as $word) 
			if (strpos(mb_strtolower(' '.$product['mark'],'UTF-8'), mb_strtolower($word,'UTF-8'))) {
				if (file_exists($_SERVER['DOCUMENT_ROOT'].'/images/thumb_products_pic/'.$product['id'].'.png')) 
					$pic = $product['id'];
				else
					$pic = 'nopic';
				
				$resultHTML .= '<div class="product_wrapper"><div class="dark_pic_border"><a><img class="product_pic" src="/images/thumb_products_pic/'.$pic.'.png" alt="" /></a></div>';
				$resultHTML .= '<p class="product_info"><span class="select">'.$product['mark'].'</span></p>';
				$resultHTML .= '<a href="/product.php?id='.$product['id'].'" class="more_button">Подробнее</a></div>';
				
				$finded = true;
			}
	}
	
	if (!$finded)
		$resultHTML .= 'К сожалению по Вашему запросу ничего не найдено.';

	echo $resultHTML;
?>