$(document).foundation()

// shows and hides filtered items
$(".filter-simple-button").click(function() {
  var value = $(this).attr('data-filter');
  if(value === "all") {
    $('.filter-simple-item').show('1000');
  } else {
    $(".filter-simple-item").not('.'+value).hide('3000');
    $('.filter-simple-item').filter('.'+value).show('3000');
  }
});

// changes active class on filter buttons
$('.filter-simple-button').click(function () {
  $(this).siblings().removeClass('is-active');
  $(this).addClass('is-active');
});

debounce = function(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
};


(function(){
	var $target = $('.anime'),
			animationClass = 'anime-start',
			offset = $(window).height() * 3/4;

	function animeScroll() {
		var documentTop = $(document).scrollTop();

		$target.each(function(){
			var itemTop = $(this).offset().top;
			if (documentTop > itemTop - offset) {
				$(this).addClass(animationClass);
			} else {
				$(this).removeClass(animationClass);
			}
		});
	}

	animeScroll();

	$(document).scroll(debounce(function(){
		animeScroll();
	}, 200));
})();

(function($) {
    $(document).ready(function() {
        $.jScrollability([
            {
                'selector': '.text-wrapper',
                'start': function($el) { return $el.offset().top + $el.height() },
                'end': 'parent',
                'fn': function($el,pcnt) {
                    var $spans = $el.find('span');
                    var point = Math.floor(($spans.length+1) * pcnt);
                    $spans.each(function(i,el) {
                        var $span = $(el);
                        if (i < point) {
                            $span.addClass('visible');
                        } else {
                            $span.removeClass('visible');
                        }
                    });
                }
            }
        ]);
    });
})(jQuery); 

// JavaScript
window.sr = ScrollReveal();
sr.reveal('.bar', { duration: 1200, delay: 500 , origin: 'top', distance: '500px', mobile: true, reset: true, rotate: { x: 0, y: 0, z: 180 }, useDelay: 'always' });

// Customizing a reveal set
sr.reveal('.foo', { duration: 1200, delay: 500 , origin: 'left', distance: '500px', mobile: true, reset: true, rotate: { x: 0, y: 0, z: 180 }, useDelay: 'always' });
sr.reveal('.dar', { duration: 1200, delay: 500 , origin: 'bottom', distance: '500px', mobile: true, reset: true, rotate: { x: 0, y: 0, z: 0 }, useDelay: 'always' });
sr.reveal('.right', { duration: 1200, delay: 500 , origin: 'right', distance: '500px', mobile: true, reset: true, rotate: { x: 0, y: 0, z: 200 }, useDelay: 'always' });
