jQuery(document).ready(function($){
	//quick menu scroll sticky
	$(window).scroll(function(e) {
		var n = $(window).scrollTop();
		var t = $(window).height() - 100;
		if (n >= t) {
			$(".quick-menu").fadeIn(500);
		} else {
			$(".quick-menu").fadeOut(500);
		}
		y = 100;
		if( $('#section-banner').length ) {
			y = $('#section-banner').outerHeight()-y;
		}
		//scroll to top
		if( n > y ) {
			$(".scrolToTop").fadeIn(500);
		} else {
			$(".scrolToTop").fadeOut(500);
		}
	});
	
	//scroll
	$("*[data-scrollto]").click(function(){
		var t=$(this).data("scrollto");
		var n=$(t).offset().top-70;
		var r=Math.round(1e3+n/5);
		$("html, body").animate({scrollTop:n},r,"easeOutQuint")
	});
	$('.scrolToTop').click(function(){
		$("html, body").animate({scrollTop: 0}, 800);
	});
	// Menu back dropdown menu
	var wWith = parseInt($(window).width());
	$('.superhero-dropdown').find('li.expanded .menu').each(function(e){
		var $this = $(this);
		var mLeft = parseInt($this.offset().left);
		var mWidth = parseInt($this.outerWidth());
		var mPosition = mLeft + mWidth;
		if( mPosition > wWith || mLeft < 0 ) {
			$this.addClass('menu-back');
		}
	});
	//Project, Blog  header custom
	if( $('.title-normal', '.title-media').length ) {
		$('body').addClass('header-clear');
		var logo = Drupal.settings.basePath + 'sites/default/files/logo-white.png';
		$('#logo').attr('src', logo);
	}
	
});