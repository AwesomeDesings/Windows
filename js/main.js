(function($) {

	"use strict";

	$('nav .dropdown').hover(function(){
		var $this = $(this);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			$this.find('.dropdown-menu').removeClass('show');
	});

})(jQuery);

$( () => {

	$('.form-group').each((i,e) => {
	  $('.form-control', e)
		.focus( function () {
		  e.classList.add('not-empty');
		})
		.blur( function () {
		  this.value === '' ? e.classList.remove('not-empty') : null;
		})
	  ;
	});
	
  });  
	
   