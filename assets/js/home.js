$(function () {
	$(document).scroll(function () {
		var navbar = $(".navbar");
		if ($(this).scrollTop() + navbar.height() >= $("#motto-container").height()) {
			navbar.addClass('navbar-scrolled');
		} else {
			navbar.removeClass('navbar-scrolled');
		}
	});
});
