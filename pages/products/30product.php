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
		
		<p class="product_text">Среди производителей линейной арматуры для СИП французская фирма <em>NILED</em> занимает особое место.  Созданная в 1932 году, и успешно вышедшая на европейский электротехнический рынок, фирма <em>NILED</em> начала выпуск арматуры для самонесущих проводов с изоляцией из сшитого полиэтилена сразу же с момента их появления, т.е. с 1955 года. Таким образом. <em>NILED</em> можно назвать одним из родоначальников массового развития современной технологии строительства ВЛИ.</p>
		
		
		<h2 class="text_head">ПРОДУКЦИЯ И ОБЛАСТЬ ПРИМЕНЕНИЯ</h2>
		
		<p class="product_text">
			Производство и поставка в полном ассортименте приспособлений для монтажа, инструмента и линейной арматуры для СИП всех систем на напряжение 0,4 кВ (СИП-1, СИП-2, СИП-4), а также арматура для защищенных проводов типа СИП-3 на напряжение 6-20 кВ.
		</p>
		
		<h2 class="text_head">СЕРТИФИЦИРОВАННОЕ КАЧЕСТВО</h2>
		
		<p class="product_text">
			Продукция <em>NILED</em> сертифицирована в России фирмой "ОРГРЭС" по системе ГОСТ Р, подвергнута периодическим испытаниям, подтверждающим возможность ее монтажа и эксплуатации при низких температурах (монтаж от -20ºС, эксплуатация от -60ºС). Линейная арматура <em>NILED</em> полностью удовлетворяет техническим требованиям ФСК "ЕЭС", МРСК и других крупных электросетевых организаций.
		</p>
	
		<a class="download_doc" href="/files/NILED 0,4 kV.xls">Скачать прайс на продукцию <strong>NILED</strong> 0,4 кВ</a>
		<a class="download_doc" href="/files/NILED 6-20 kV.xls">Скачать прайс на продукцию <strong>NILED</strong> 6-20 кВ</a>
		<a class="download_doc" href="/files/NILED Instrument.xls">Скачать прайс на инструменты <strong>NILED</strong></a>
	
	</div>
</div>