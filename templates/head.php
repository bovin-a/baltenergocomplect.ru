<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
	<title><?php echo $title; ?></title>
	<?php	switch ($page) {
		case 'index':
			$description = "Балтэнергокомплект много лет работает на рынке кабельно-проводниковой продукции, которая произведена с применением самых современных технологий и соответствует требованиям и стандартам качества.";
			$keywords    = 'балтэнергокомплект, балт энерго комплект, кабель';
			break;
	}?>
	<meta name="description" content="<?php echo $description; ?>" />
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<meta name="author" content="ABovin" />
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/<?php echo $page; ?>.css">
	<?php if ($menu_item == 0 || $menu_item == 1) echo '<link rel="stylesheet" href="/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />'; ?>
	<script src="/js/jquery-1.7.min.js"></script>
	<script src="/js/script.js"></script>
	<script type="text/javascript" src="/js/jquery.inputfocus-0.9.min.js"></script>
	<?php if ($menu_item == 0 || $menu_item == 1) echo '<script src="/js/jquery.easing.1.3.js"></script><script src="/js/jquery.simplyslider.js"></script><script src="/js/jquery.prettyPhoto.js"></script>'; ?>
	<!--[if lt IE 9]>		<link rel="stylesheet" href="/css/ie.css">	<![endif]-->
</head>
<body>
	<!-- Top line -->
	<div id="top_line"></div>
	<!-- Page -->
	<div id="main_wrapper">
		<div id="wrapper">