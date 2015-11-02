<!-- Content -->
<div id="content_wrapper">
	<!-- About products -->
	<div id="left">
		
		<!-- Picture -->
		<div id="head_pic_wrapper">
			<div id="head_pic"><img src="/images/products/head_pic.png" width="299" height="245" alt="" /></div>
		</div>
		
		<h2 class="part_head"><span class="white_shadow">Не нашли того, что искали?</span><span class="main_text">Не нашли того, что искали?</span></h2>
		<div class="separator"></div>
		
		<p class="products_text">В случае если вы не смогли найти интересующий Вас кабель, позвоните нам. Мы сможем найти решение Вашего запроса.</p>
	
	</div>
	<!-- Products select -->
	<div id="right">
		
		<?php if (isset($_GET['cable']) && ($_GET['cable'] != '') ) $search_cable = ' "'.$_GET['cable'].'"'; else $search_cable='';?>
		<h2 class="part_head"><span class="white_shadow">Результаты поиска<?php echo $search_cable;?></span><span class="main_text">Результаты поиска<?php echo $search_cable;?></span></h2>
		<div class="separator"></div>
		
		<div id="selected_product_list">
			<?php
				
				if (isset($_GET['cable']) && ($_GET['cable'] != '') )
					include 'search_products.php';
					
			?>
		</div>
	</div>
</div>