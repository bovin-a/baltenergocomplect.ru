		</div>
	</div>
	<!-- Footer -->
	<div id="footer_wrapper">
		<p>БалтЭнергоКомплект © 2010-<?php echo date("Y"); ?></p>
	</div>
	<?php include 'counter.php'; ?>
	
	<?php if ($menu_item == 0 || $menu_item == 1) : ?>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto({theme:'light_square',social_tools:false});
		});
	</script>
	<?php endif; ?>
	<?php
		if ($menu_item == 4) echo '<script src="http://api-maps.yandex.ru/1.1/index.xml?key=AOpso08BAAAA9b1PdgIAMP4GvJBPdp5ksn8HmjMgGFWlY5MAAAAAAAAAAABLCK1tZytJUXVxS1Da7lAO2gToxw==" type="text/javascript"></script>';
	?>
</body>
</html>
<?php
	// Был POST
	if ( isset($_SESSION['post']) ) {
		
		// Если костыль не создан, то создаем его
		if (!isset($_SESSION['spike']))
			$_SESSION['spike'] = 1;
			
		// Если костыль уже создан, то тогда удаляем переменные сессии
		else {
			$_SESSION = array();
		}
	}
?>