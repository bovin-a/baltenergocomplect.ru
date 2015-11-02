(function($) {
	
	var slider;
	
	var current_slide;
	var next_slide;
	var prev_slide;
	
	var params = new Array();
	
	var hover;
	
	var interval;
	
	$.fn.SimplySlider = function(options){
	
		// Инициализация слайдера
		init = function(elem) {
		
			params = $.extend({}, $.fn.SimplySlider.defaults, options);
			
			slider = $(elem)
		
			// Подготавливаем слайды
			$.setSlides();
			
			// Подготавливаем кнопки навигации
			$.setNavigation();
			
			// Запускаем функцонирование слайдера
			$.transitionCall();
		}
		
		$.setSlides = function () {
			
			// Запоминаем слайды и позиционируем их
			current_slide = $('div.slide:first',slider);
			
			prev_slide = $('div.slide:last' ,slider);
			prev_slide.css('marginLeft','940px');
			
			next_slide = $('div.slide:first',slider).next();			
			next_slide.css('marginLeft','-940px');
			
			// Определяем паузу в работе слайдера при наводе мышкой на слайд
			$('div.slide',slider)
				.mouseover(function(){ hover = true ; })
				.mouseout (function(){ hover = false; });
		}
		
		$.setNavigation = function () {
			
			// События при листании слайдов кнопками
			$('.next',slider).click(function() {
				if ($('div.slide:animated',slider).length) return;
				
				$.transition('next');
				$.transitionCall();
			});
			
			$('.prev',slider).click(function() {
				if ($('div.slide:animated',slider).length) return;
				
				$.transition('prev');
				$.transitionCall();
			});
		}
		
		// Функция вызывающая изменение слайда каждые delay миллисекунд
		$.transitionCall = function() {
		
			// Очищаем интервал
			clearInterval(interval);
			// Устанавливаем интервал
			interval = setInterval(function() { $.transition()  }, params.delay);
			
		}
		
		$.transition = function(direction) {
		
			// Если в работе слайда пауза, то перехода между слайдами нет
			if (hover == true) return;
			
			// В зависимости от направления показа
			if (direction == 'prev') {
				
				// Выводим предыдущий слайд
				current_slide.animate({marginLeft: "-940px"},1000);
				prev_slide.animate({marginLeft: "0px"},1000);
				
				// Слайды меняются местами
				var buf_slide = current_slide;
				current_slide  = prev_slide;
				prev_slide = next_slide;
				next_slide = buf_slide;
				prev_slide.css('marginLeft','940px');
				
			} else {
			
				// Выводим следующий слайд
				current_slide.animate({marginLeft: "940px"},1000);
				next_slide.animate({marginLeft: "0px"},1000);
				
				// Слайды меняются местами
				var buf_slide = current_slide;
				current_slide  = next_slide;
				next_slide = prev_slide;
				next_slide.css('marginLeft','-940px');
				prev_slide = buf_slide ;
			}
		}
		
		
		this.each (function(){ init(this); } );
	}
	

	
	// default values
	$.fn.SimplySlider.defaults = {	
		width  :  940, // ширина слайдера
		height :  410, // высота слайдера
		delay  : 6000, // пауза между сменой картинок
	};	
	
})(jQuery);
$(function(){
	$('#slider').SimplySlider();
});