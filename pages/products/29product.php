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
		
		<h1 class="product_head">Арматура <?php echo str_replace('<br />',',',$product_name); ?></h1>
		
		<h2 class="text_head">О КОМПАНИИ</h2>
		
		<p class="product_text">Компания <em>Ensto</em> известна как производитель и поставщик высококачественной электротехнической продукции и работает в этой области с 1958 года. Сегодня <em>Ensto</em> осуществляет свою деятельность в 17 странах, экспортирует продукцию более чем в  80 стран и насчитывает более 1400 сотрудников.</p>
		
		
		<h2 class="text_head">ПРОДУКЦИЯ И ОБЛАСТЬ ПРИМЕНЕНИЯ</h2>
		
		<p class="product_text"><em>Ensto</em> разрабатывает и изготавливает  оборудование для строительства воздушных линий с изолированными проводами (ВЛИ) 0,4 кВ и воздушных линий с защищенными проводами (ВЛЗ) 6-35 кВ и предлагает комплексные решения для предприятий передачи и распределения электроэнергии. Основная номенклатура изделий включает в себя материалы для строительства воздушных линий электропередачи и материалы для строительства подземных кабельных линий. </p>
		<p class="product_text">Компанией <em>Ensto</em> разработан ряд инструментов, предназначенных для проведения работ под напряжением на линии без ее отключения.</p>
		<p class="product_text">Также <em>Ensto</em> поставляет широкий спектр инструментов для строительства электрических сетей.</p>
		
		<h2 class="text_head">СЕРТИФИЦИРОВАННОЕ КАЧЕСТВО</h2>
		
		<p class="product_text">Производственные предприятия <em>Ensto</em> подразделения прошли сертификацию мероприятий по охране и рациональному использованию окружающей среды в соответствии с ISO 9001 и ISO 14 001. Изделия компании, удовлетворяют различным международным стандартам, таким как IEC, EN, VDE/DIN, CENELEC, SFS2663, NF и т.д.</p>
	
		<a class="download_doc" href="/files/Ensto products.pdf">Скачать информацию по продукции <strong>Ensto</strong></a>
		<a class="download_doc" href="/files/Ensto.xls">Скачать прайс на продукцию <strong>Ensto</strong></a>
		
	</div>
</div>