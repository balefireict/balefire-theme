(function ($, root, undefined) {

	$(function () {

		'use strict';

		// open mobile navigation on click
		$('#mobile-menu-icon').click(function () {
			// $('#nav-main-wrapper').slideToggle('fast');
			$('#nav-main-wrapper').addClass('active');
			$('#mobile-nav-page-overlay').addClass('active');
			$('#mobile-menu-icon-close').fadeToggle('fast');
			$('#mobile-menu-icon').fadeToggle('fast');
			$('body').addClass('mobile-menu-open');
		});
		$('#mobile-menu-icon-close').click(function () {
			// $('#nav-main-wrapper').slideToggle('fast');
			$('#nav-main-wrapper').removeClass('active');
			$('#mobile-nav-page-overlay').removeClass('active');
			$('#mobile-menu-icon').fadeToggle('fast');
			$('#mobile-menu-icon-close').fadeToggle('fast');
			$('body').removeClass('mobile-menu-open');
		});

		// Open sub menus on click
		$('#nav-main .menu-item-has-children > a').click(function (e) {
			e.preventDefault();
			var $parent = $(this).parent().parent(); // the parent <ul> of the <a>
			var $submenus = $parent.find('ul'); // any submenus inside this <ul>
			var $current_submenu = $(this).parent().find('> .sub-menu');
			// $($submenus).not($current_submenu).hide();
			$($submenus).not($current_submenu).removeClass("active");
			$(this).parent().toggleClass("active");
			$($current_submenu).toggleClass("active");

			// If Mobile Menu Open
			if ($('body').hasClass('mobile-menu-open')) {
				$($current_submenu).slideToggle("fast");
			}
		});

		// Close dropdown menus when clicking outside of element
		$(document).on("click", function (e) {
			if ($(e.target).is("#nav-main .menu-item-has-children > a") === false) {
				$(".sub-menu.active").removeClass("active");
				$(".menu-item-has-children.active").removeClass("active");
			}
		});

	});

})(jQuery, this);
