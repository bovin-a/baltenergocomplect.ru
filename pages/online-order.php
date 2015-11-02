<!-- Content -->
<div id="content_wrapper">
	<!-- About order -->
	<div id="left">
		<h2 class="part_head"><span class="white_shadow">Напишите нам</span><span class="main_text">Напишите нам</span></h2>
		
		<div class="separator"></div>
		
		<div class="pic_border"><img src="/images/online-order/write_us.png" width="296" height="197" alt="" /></div>
		
		<p class="about_online">В данном разделе Вы можете отправить сообщение, чтобы задать интересующие вопросы по работе нашей компании или наличию того или иного товара.</p>
		<p class="about_online">Также здесь Вы можете сделать заказ, указав необходимый вид товара и его количество. Это так же можно сделать, приложив готовый перечень необходимой продукции в виде файла.</p>
		<p class="about_online">Мы свяжемся с Вами в течение 24 часов после получения заявки.</p>
		
	</div>
	<!-- Form -->
	<div id="right">
		<h2 class="part_head"><span class="white_shadow">Форма заявки</span><span class="main_text">Форма заявки</span></h2>
		
		<div class="separator"></div>
		
		<form id="online-order" action="/online-order.php" method="post" enctype="multipart/form-data">
			
			<?php if (isset($_SESSION['order_sended'])) : ?>
			<div class="order_sended">
				<p>Спасибо! Ваша заявка отправлена в <?php echo date("H:i"); ?>. В течении 24 часов мы свяжемся с Вами.</p>
			</div>
			<?php endif; ?>
			
			<label>
				<input type="text" name="name" value="<?php if (isset($_SESSION['name'])) echo $_SESSION['name']; else echo 'Ф.И.О.';?>">
				<?php if (isset($_SESSION['name_error'])) echo '<span class="error">Обязательное для заполнения поле!</span>'; ?>
			</label>
			
			<label>
				<input type="text" name="phone" value="<?php if (isset($_SESSION['phone'])) echo $_SESSION['phone']; else echo 'Телефон';?>">
				<?php if (isset($_SESSION['phone_error'])) echo '<span class="error">Обязательное для заполнения поле!</span>'; ?>
			</label>
			
			<label>
				<input type="text" name="company" value="Организация">
			</label>
			
			<label>
				<textarea name="text" wrap="soft"><?php if (isset($_SESSION['text'])) echo $_SESSION['text']; else echo 'Примечание';?></textarea>
				<?php if (isset($_SESSION['text_error'])) echo '<span class="error">Обязательное для заполнения поле!</span>'; ?>
			</label>
			
			<div class="file_select"><input type="file" name="file"></div>
			
			<div class="center">
				<input type="submit" value="Отправить" name="submit_order">
				<input type="submit" value="Очистить" name="clear_order">
			</div>
		</form>
		
	</div>
</div>