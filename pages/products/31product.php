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
		
		<h2 class="text_head">ОБЛАСТЬ ПРИМЕНЕНИЯ</h2>
		
		<h2 class="text_head">КОНСТРУКЦИЯ</h2>
		
		<h2 class="text_head">ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</h2>
	
	</div>
</div>