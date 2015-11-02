<?php
	
	header('Content-Type: text/html;charset=UTF-8');
	error_reporting(0);
	session_start();
	
	$path = 'pages/';
	
	// Отправка онлайн формы
	include 'send_order.php';
	
	// Информация о продукте
	include 'get_product_info.php';
	
	if (!defined('enter_correct'))
	{
		$title = 'Страница не найдена';
		$page = '404';
		$menu_item = 0;
	}
	
	include 'templates/head.php';
	
	include 'templates/header.php';
	
	include $path.$page.'.php';

	include 'templates/footer.php';