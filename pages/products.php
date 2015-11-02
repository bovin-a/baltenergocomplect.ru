<!-- Content -->
<div id="content_wrapper">
	<!-- About products -->
	<div id="left">
		
		<!-- Picture -->
		<div id="head_pic_wrapper">
			<div id="head_pic"><img src="/images/products/head_pic.png" width="299" height="245" alt="" /></div>
		</div>
		
		<h2 class="part_head"><span class="white_shadow">Продукция</span><span class="main_text">Продукция</span></h2>
		<div class="separator"></div>

		<p class="products_text">В данном разделе Вы можете выбрать необходимую продукцию, ознакомиться с техническими данными, а также скачать соответствующую техническую документацию.</p>
		<p class="products_text">В случае отсутствия необходимой продукции на сайте, Вы можете воспользоваться <a href="/contacts.php">on-line заявкой</a>, либо связаться с нами по телефону.</p>
		<p class="products_text">В течение 24 часов мы найдем необходимый товар.</p>
	
	</div>
	<!-- Products select -->
	<div id="right">
		<div id="filter_wrapper">
			<h2 class="part_head"><span class="white_shadow">Выберите интересующую Вас продукцию</span><span class="main_text">Выберите интересующую Вас продукцию</span></h2>
			
			<ul id="product_sections_list">
				<li><a class="product_section <?php if ( (isset($_GET['g'])) && ($_GET['g']==1) ) echo 'current'; ?>" href="/products.php?g=1">Кабели силовые</a></li>
				<li><a class="product_section <?php if ( (isset($_GET['g'])) && ($_GET['g']==2) ) echo 'current'; ?>" href="/products.php?g=2">Кабели контрольные</a></li>
				<li><a class="product_section <?php if ( (isset($_GET['g'])) && ($_GET['g']==9) ) echo 'current'; ?>" href="/products.php?g=9">Огнестойкие кабели для систем ПС</a></li>
				<li><a class="product_section <?php if ( (isset($_GET['g'])) && ($_GET['g']==3) ) echo 'current'; ?>" href="/products.php?g=3">Провода неизолированные</a></li>
				<li><a class="product_section <?php if ( (isset($_GET['g'])) && ($_GET['g']==4) ) echo 'current'; ?>" href="/products.php?g=4">Провода самонесущие изолированные</a></li>
				<li><a class="product_section <?php if ( (isset($_GET['g'])) && ($_GET['g']==5) ) echo 'current'; ?>" href="/products.php?g=5">Провода и шнуры</a></li>
				<li><a class="product_section <?php if ( (isset($_GET['g'])) && ($_GET['g']==6) ) echo 'current'; ?>" href="/products.php?g=6">Арматура для монтажа</a></li>
				<li><a class="product_section <?php if ( (isset($_GET['g'])) && ($_GET['g']==8) ) echo 'current'; ?>" href="/products.php?g=8">Муфты кабельные</a></li>
				<li><a class="product_section <?php if ( (isset($_GET['g'])) && ($_GET['g']==7) ) echo 'current'; ?>" href="/products.php?g=7">Трубы</a></li>
			</ul>
			
			<ul id="product_sub_section_list">
				<div id="power_sub_section" class="sub_section_wrapper" <?php if ( (isset($_GET['g'])) && ($_GET['g']==1) ) echo 'style="display:block;"'; ?>>
					<li><a class="product <?php if ( (isset($_GET['sg'])) && ($_GET['sg']==1) ) echo 'current'; ?>" href="/products.php?g=1&sg=1">С пластмассовой изоляцией</a></li>
					<li><a class="product <?php if ( (isset($_GET['sg'])) && ($_GET['sg']==2) ) echo 'current'; ?>" href="/products.php?g=1&sg=2">С резиновой изоляцией</a></li>
				</div>
				<div id="accessories_sub_section" class="sub_section_wrapper" <?php if ( (isset($_GET['g'])) && ($_GET['g']==6) ) echo 'style="display:block;"'; ?>>
					<li><a class="product <?php if ( (isset($_GET['sg'])) && ($_GET['sg']==3) ) echo 'current'; ?>" href="/products.php?g=6&sg=3">СИП</a></li>
					<li><a class="product <?php if ( (isset($_GET['sg'])) && ($_GET['sg']==4) ) echo 'current'; ?>" href="/products.php?g=6&sg=4">Поддерживающие зажимы</a></li>
				</div>
				<div id="ferrule_sub_section" class="sub_section_wrapper" <?php if ( (isset($_GET['g'])) && ($_GET['g']==8) ) echo 'style="display:block;"'; ?>>
					<li><a class="product <?php if ( (isset($_GET['sg'])) && ($_GET['sg']==5) ) echo 'current'; ?>" href="/products.php?g=8&sg=5">Муфты Raychem</a></li>
					<li><a class="product <?php if ( (isset($_GET['sg'])) && ($_GET['sg']==6) ) echo 'current'; ?>" href="/products.php?g=8&sg=6">Муфты Elcon Megarad</a></li>
				</div>
			</ul>
		</div>
		
		<div id="selected_product_list">
			<?php
				
				if ( isset( $_GET['g'])) $g = $_GET['g'];
				else                      $g = 0;
				
				if ( isset( $_GET['sg'])) $sg = $_GET['sg'];
				else                       $sg = 0;
				
				
				switch ($g) 
				{
					case 1 : $group = 'power';
							 $group_name = 'Кабели силовые';
							 break;
					case 2 : $group = 'control';
							 $group_name = 'Кабели контрольные';
							 break;
					case 3 : $group = 'bare';
							 $group_name = 'Провода неизолированные';
							 break;
					case 4 : $group = 'self-bearing';
							 $group_name = 'Провода самонесущие';
							 break;
					case 5 : $group = 'wire';
							 $group_name = 'Провода и шнуры';
							 break;
					case 6 : $group = 'accessories';
							 $group_name = 'Арматура для монтажа';
							 break;
					case 7 : $group = 'tube';
							 $group_name = 'Трубы';
							 break;
					case 8 : $group = 'ferrule';
							 $group_name = 'Муфты кабельные';
							 break;
					case 9 : $group = 'fireresistant';
							 $group_name = 'Огнестойкие кабели для систем пожарной сигнализации';
							 break;
				}
				
				switch ($sg)
				{
					case 1 : $subgroup = 'plastic';
							 $subgroup_name = ' - С пластмассовой изоляцией';
							 break;
					case 2 : $subgroup = 'rubber';
							 $subgroup_name = ' - С резиновой изоляцией';
							 break;
					case 3 : $subgroup = 'sip';
							 $subgroup_name = ' - СИП';
							 break;
					case 4 : $subgroup = 'clamp';
							 $subgroup_name = ' - Поддерживающие зажимы';
							 break;
					case 5 : $subgroup = 'rayhem';
							 $subgroup_name = ' - Raychem';
							 break;
					case 6 : $subgroup = 'megarad';
							 $subgroup_name = ' - Elcon Megarad';
							 break;
					default : $subgroup = 'none';
							  $subgroup_name = '';
				}
				
				if (
				      ((($g > 1) && ($g < 6)) || $g == 7 || $g == 9) 
					                 || 
					  ($g == 1 && ($sg == 1 || $sg == 2))
									 || 
					  ($g == 6 && ($sg == 3 || $sg == 4))
									 ||
					  ($g == 8 && $sg == 5)
									 ||
					  ($g == 8 && $sg == 6)
				   )
				{
					include "select_products.php";
				}
			?>
		</div>
	</div>
</div>