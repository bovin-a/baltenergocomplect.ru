<!-- Content -->
<div id="content_wrapper">
	<!-- About order -->
	<div id="left">	
		
		<!-- Picture -->
		<?php
			if (file_exists($_SERVER['DOCUMENT_ROOT'].'/images/products_pic/'.$_GET['id'].'.png')) 
				$pic = $_GET['id'];
			else
				$pic = 'nopic';
		?>
		<div id="head_pic_wrapper">
			<div id="head_pic"><img src="/images/products_pic/<?php echo $pic; ?>.png" width="299" height="245" alt="" /></div>
		</div>
		
		<h2 class="part_head"><span class="white_shadow">Как купить</span><span class="main_text">Как купить</span></h2>
		
		<div class="separator"></div>
		
		<p class="how_buy">Для того, чтобы приобрести нашу продукцию, Вы можете позвонить нам и обговорить все детали заказа.</p>
		<p class="how_buy">Либо Вы можете оставить <a class="online-order" href="/online-order.php">онлайн-заявку</a> заполнив форму. Укажите какой вид кабеля Вам необходим и в каком количестве. После этого мы свяжемся с Вами в течение 24  часов.</p>
		
	</div>
	<!-- Form -->
	<div id="right">
		
		<h1 class="product_head"><?php echo str_replace('<br />',',',$product_name); ?></h1>
		
		<h2 class="text_head">О КОМПАНИИ</h2>
		<p class="product_text">
			Elcon Megarad – ведущая сертифицированная компания по разработке и производству собственных решений в области аксессуаров к силовым кабелям (кабельным соединителям) и оконечной кабельной арматуре для низкого, среднего и высокого напряжения.
		</p>
		
		<h2 class="text_head">ПРОДУКЦИЯ И ОБЛАСТЬ ПРИМЕНЕНИЯ</h2>
		<p class="product_text">
			Главной особенностью компании является собственное производство термоусадочных муфт (тонко-, средне- и толстостенных, одно- и многослойного прессования), высокоэластичных муфт и компонентов, а также мастик и смол для применения в электротехнике. Также компания отличается обширным, насчитывающим более 30 лет опытом по разработке высококачественных сертифицированных решений в области кабельных соединителей и оконечной кабельной арматуры, что позволяет удовлетворять потребности рынка по всему миру.
		</p>
		
		<h2 class="text_head">СЕРТИФИЦИРОВАННОЕ КАЧЕСТВО</h2>
		<p class="product_text">
			Компания Elcon Megarad обладает сертификатом качества ISO 9000 и сертификатом экологического менеджмента ISO 14000. Продукция прошла типовые испытания в соответствии со стандартами IEC, CENELEC и IEEE в самых авторитетных международных лабораториях, таких как CESI, KEMA, VEIKI и FGH.
		</p>
		
		<!--<a class="download_doc" href="/files/.xls">Скачать каталог муфт <strong>Elcon Megarad</strong> (до 1 кВ)</a>-->
		<!--<a class="download_doc" href="/files/.xls">Скачать каталог муфт <strong>Elcon Megarad</strong> (до 36 кВ)</a>-->
		
	</div>
</div>