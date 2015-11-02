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
		<p class="product_text">Для защиты слаботочной и силовой электрической проводки от механических повреждений применяют технические полиэтиленовые трубы. Кроме этого, их используют при заливке в монолитобетон и для наружных и внутренних безнапорных трубопроводов. Трубы ПНД довольно удобны при изготовлении изделий из железобетона, трубчатых хозяйственных и садовых конструкций, а также мелиоративных систем. Такие конструкции довольно часто применяют при производстве систем для слива и безнапорной транспортировки, сред химически нейтральных к полиэтилену. С помощью труб ПНД сооружают вентиляционные системы с естественным оттоком и притоком воздуха, переноса сыпучих сред. В общем, данные трубы особо часто используются в хозяйственно - бытовых, промышленных и строительных промышленностях. Трубы ПНД часто применяют в роли колец, различных валиков и шпуль для намотки всевозможных нитей в виде заготовок и уже готовых изделий.</p>
		
		<h2 class="text_head">ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</h2>
		<table class="text_table">
			<tbody>
				<tr>
					<td>Материал</td>
					<td>полиэтилен низкого давления</td>
				</tr>
				<tr>
					<td>Стандарт</td>
					<td>ТУ 2248-001-87990221-2009</td>
				</tr>
				<tr>
					<td>Условия монтажа</td>
					<td>для скрытой проводки в стенах, в потолках, в полах из несгораемых и трудно сгораемых материалов</td>
				</tr>
				<tr>
					<td>Рабочая температура, <span class="unit">°С</span></td>
					<td>от -25 до +90</td>
				</tr>
				<tr>
					<td>Цвет</td>
					<td>черный</td>
				</tr>
				<tr>
					<td>Диэлектрическая прочность (50 Гц, в течении 15 минут), <span class="unit">В</span>, не менее</td>
					<td>2000</td>
				</tr>
				<tr>
					<td>Сопротивление изоляции (500В, в течение 1 мин.), <span class="unit">МОм</span>, не менее</td>
					<td>100</td>
				</tr>
				<tr>
					<td>Сертификат соответствия</td>
					<td>№ РОСС RU.АВ28.В11443 от 18.08.2011</td>
				</tr>
			</tbody>
		</table>
		
		<a class="download_doc" href="/files/PND.xls">Скачать техническую документацию по трубам <strong>ПНД</strong></a>
		
	</div>
</div>