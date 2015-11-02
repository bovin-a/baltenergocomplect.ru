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
			Завод Tyco Electronics, на котором изготавливается арматура <em>Raychem</em> поставляет свою продукцию более чем в 60 стран. 50-летний опыт работы завода Tyco Electronics по всему миру в электротехнических сетях свидетельствует о высоком качестве и безопасности эксплуатации арматуры <em>Raychem</em>.
		</p>
		
		
		<h2 class="text_head">ПРОДУКЦИЯ И ОБЛАСТЬ ПРИМЕНЕНИЯ</h2>
		
		<p class="product_text">
			Кабельная арматура <em>Raychem</em> - это надежные и качественные изоляционные и гермитичные системы для ремонта кабельных линий, состоящих из различных кабелей напряжением от 0,4 до 170 кВ.
		</p>
		
		<p class="product_text">
			Кабельные муфты <em>Raychem</em> - термоусаживаемые компоненты, выполненные на основе поперечно - сшитых полимеров с пластической памятью формы, отличаются исключительными электрическими и механическими характеристиками, а также удобством, скоростью монтажа и длительным сроком службы. 
		</p>
		
		<h2 class="text_head">СЕРТИФИЦИРОВАННОЕ КАЧЕСТВО</h2>
		
		<p class="product_text">
			Вся продукция, произведенная на Tyco Electronics, сертифицирована и допущена к установке во всех кабельных сетях РФ.
		</p>
		
		<a class="download_doc" href="/files/Raychem.xls">Скачать прайс на продукцию <strong>Raychem</strong></a>
	
	</div>
</div>