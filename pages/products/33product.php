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
		
		<h1 class="product_head">Труба <?php echo str_replace('<br />',',',$product_name); ?></h1>
		
		<h2 class="text_head">ОБЛАСТЬ ПРИМЕНЕНИЯ</h2>
		<p class="product_text">Применяются для открытой и скрытой проводки по стенам (в стенах), потолкам (в потолках) из сгораемых и несгораемых материалов. Негорючий самозатухающий материал ПВХ исключает возможность возгорания от короткого замыкания и распространения пламени по трубе.</p>
		
		<h2 class="text_head">ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</h2>
		<table class="text_table">
			<tbody>
				<tr>
					<td>ТУ</td>
					<td>3464-001-18669258-99</td>
				</tr>
				<tr>
					<td>ГОСТ</td>
					<td>50827-95 (МЭК 670-89)</td>
				</tr>
				<tr>
					<td>Цвет</td>
					<td>серый RAL 7035</td>
				</tr>
				<tr>
					<td>Степень защиты</td>
					<td>IP 55 по ГОСТ 14254 (МЭК 529)</td>
				</tr>
				<tr>
					<td>Температура монтажа, <span class="unit">°С</span></td>
					<td>от -5 до +90</td>
				</tr>
				<tr>
					<td>Диапазон рабочих температур, <span class="unit">°С</span></td>
					<td>от -40 до +45</td>
				</tr>
				<tr>
					<td>Механическая прочность на 5 см при +20°С, <span class="unit">Н</span></td>
					<td>350</td>
				</tr>
				<tr>
					<td>Сопротивление изоляции в течение 1 мин. (500V), <span class="unit">МОм</span></td>
					<td>100</td>
				</tr>
				<tr>
					<td>Диэлектрическая прочность в течение 15 мин. (50 Гц.), <span class="unit">В</span></td>
					<td>2000</td>
				</tr>
				<tr>
					<td>Огнестойкость не поддерживает горение до, <span class="unit">°С</span></td>
					<td>650</td>
				</tr>
			</tbody>
		</table>
	
		<a class="download_doc" href="/files/PVH.xls">Скачать техническую документацию по трубам <strong>ПВХ</strong></a>
	</div>
</div>