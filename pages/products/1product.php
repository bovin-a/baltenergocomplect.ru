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
		
		<h1 class="product_head">Кабель <?php echo str_replace('<br />',',',$product_name); ?></h1>
		
		<h2 class="text_head">ОБЛАСТЬ ПРИМЕНЕНИЯ</h2>
		<p class="product_text">Кабели предназначены для передачи и распределения электрической энергии в стационарных установках на номинальное напряжение 0,66 или 1 кВ частоты 50 Гц, при наличии опасности механических повреждений при эксплуатации.</p>
		
		<h2 class="text_head">КОНСТРУКЦИЯ</h2>
		<p class="construction_text"><strong>Жила</strong> – медная или алюминиевая однопроволочная или многопроволочная секторной или круглой  формы</p>
		<p class="construction_text"><strong>Изоляция</strong> – ПВХ  пластикат</p>
		<p class="construction_text"><strong>Поясная изоляция</strong> – две ленты ПВХ пленки и две ленты синтетической бумаги</p>
		<p class="construction_text"><strong>Защитный покров</strong> – две стальные ленты и защитный шланг из ПВХ  пластиката</p>
		
		<h2 class="text_head">ТЕХНИЧЕСКИЕ ДАННЫЕ</h2>
		<table class="text_table">
			<tbody>
				<tr>
					<td>Номинальное напряжение, <span class="unit">кВ</span></td>
					<td>0,66 или 1</td>
				</tr>
				<tr>
					<td>Температура эксплуатации, <span class="unit">°С</span></td>
					<td>-50 до +50</td>
				</tr>
				<tr>
					<td>Строительная длина, <span class="unit">м</span>, не менее:<br />&nbsp;&nbsp;&nbsp;&nbsp;при сечении 1,5-16 мм2<br />&nbsp;&nbsp;&nbsp;&nbsp;при сечении 25-70 мм2<br />&nbsp;&nbsp;&nbsp;&nbsp;при сечении 95-240 мм2</td>
					<td><br />450<br />300<br />200</td>
				</tr>
				<tr>
					<td>Минимальный радиус изгиба при прокладке, <span class="unit">диаметров кабеля</span>, не менее</td>
					<td>7,5</td>
				</tr>
			</tbody>
		</table>
		
		<p class="product_text"><strong>Кабели соответствуют требованиям  ГОСТ 16442-80</strong></p>
		
		<a class="download_doc" href="/files/AVBbSHv, VBbSHv.xls">Скачать техническую документацию для кабелей <strong>АВБбШв, ВБбШв</strong></a>
	</div>
</div>