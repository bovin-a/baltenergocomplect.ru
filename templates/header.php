<!-- Header -->
<div id="header_wrapper">
	<!-- Phone -->
	<div id="phone_wrapper">
		<p>8 (812) 438 31 98</p>
	</div>
	<!-- Logo -->
	<div id="logo_wrapper">
		<a class="logo" href="/">БалтЭнергоКомплект</a>
		<span class="logo_text">кабельно-проводниковая продукция</span>
	</div>
	<!-- Navigation -->
	<div id="nav_wrapper">
		<ul class="nav">
			<li class="company <?php if ($menu_item == 1) echo 'currentBlock'; ?>">
				<a class="<?php if ($menu_item == 1) echo 'currentItem'; ?>" href="/about.php">О компании</a>
			</li>
			
			<div class="nav_separator <?php if ( ($menu_item == 1) || ($menu_item == 2)) echo 'nav_separator_current'; ?>"></div>
			
			<li class="products <?php if ($menu_item == 2) echo 'currentBlock'; ?>">
				<a class="<?php if ($menu_item == 2) echo 'currentItem'; ?>" href="/products.php">Продукция</a>
			</li>
			
			<div class="nav_separator <?php if (($menu_item == 2) || ($menu_item == 3)) echo 'nav_separator_current'; ?>"></div>
			
			<li class="online-order <?php if ($menu_item == 3) echo 'currentBlock'; ?>">
				<a class="<?php if ($menu_item == 3) echo 'currentItem'; ?>" href="/online-order.php">Онлайн заявка</a>
			</li>
			
			<div class="nav_separator <?php if (($menu_item == 3) || ($menu_item == 4)) echo 'nav_separator_current'; ?>"></div>
			
			<li class="contacts <?php if ($menu_item == 4) echo 'currentBlock'; ?>">
				<a class="<?php if ($menu_item == 4) echo 'currentItem'; ?>" href="/contacts.php">Контакты</a>
			</li>
			
			<div class="nav_separator <?php if (($menu_item == 4) || ($menu_item == 5)) echo 'nav_separator_current'; ?>"></div>
			
		</ul>
		
		<form id="search_form" action="/search.php">
			<input type="text" name="cable" value="<?php if (isset($_GET['cable']) && ($_GET['cable'] != '')) echo $_GET['cable']; else echo 'Введите название кабеля'; ?>">
		</form>
	</div>
</div>