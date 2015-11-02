$(document).ready(function(){
	$('.nav li > a').hover(
		function() {
			$(this).parent().addClass('hoverBlock');
			$(this).parent().prev().addClass('nav_separator_current');
			$(this).parent().next().addClass('nav_separator_current');
		},
		function() {
			$(this).parent().removeClass('hoverBlock');
			$(this).parent().prev().removeClass('nav_separator_current');
			$(this).parent().next().removeClass('nav_separator_current');
			
			$('.nav .currentBlock').prev().addClass('nav_separator_current');
			$('.nav .currentBlock').next().addClass('nav_separator_current');
		}
	);
	
	$('.powersupplywrap a').hover(
		function() {
			if ($(this).next().hasClass('man_selected') == false)
				$('.powersupplyman').css('background-position','-83px 0px');
				
			$(this).css('text-decoration','underline');
		},
		function() {
			if ($(this).next().hasClass('man_selected') == false)
				$('.powersupplyman').css('background-position','0px 0px');
				
			$(this).css('text-decoration','none');
		}
	);
	
	if ($('#YMapsID').length) {
		var map = new YMaps.Map(YMaps.jQuery("#YMapsID")[0]);
					
		map.setCenter(new YMaps.GeoPoint(30.363927,60.058832), 16);
		map.addControl(new YMaps.Zoom(), new YMaps.ControlPosition(YMaps.ControlPosition.TOP_LEFT, new YMaps.Point(5, 5)));
		map.enableScrollZoom();
				
		var placemark = new YMaps.Placemark(new YMaps.GeoPoint(30.364656,60.059098),{style: "default#lightbluePoint"});
				
		placemark.setIconContent("БалтЭнергоКомплект");
		placemark.name = "БалтЭнергоКомплект";
		placemark.description = "ул. Домостроительная, д.1, офис 402<br>8 (812) 438 31 98";

		map.addOverlay(placemark); 
	}

	if ($('#online-order').length) {
		$('#online-order input[name=mark]').inputfocus({ value:'Марка кабеля'});
		$('#online-order input[name=amount]').inputfocus({ value:'Количество в метрах'});
		$('#online-order input[name=name]').inputfocus({ value:'Ф.И.О.'});
		$('#online-order input[name=phone]').inputfocus({ value:'Телефон'});
		$('#online-order input[name=company]').inputfocus({ value:'Организация'});
		$('#online-order textarea').inputfocus({ value:'Примечание'});
	}
	
	$('#online-order span.error').slideDown();
	$('#online-order div.order_sended').slideDown();
});