$(function () {
	$(document).scroll(function () {
		var navbar = $(".navbar");
		if ($(this).scrollTop() + navbar.height() >= $("#motto-container").height()) {
			navbar.addClass('bg-light');
			navbar.addClass('navbar-light');
			navbar.removeClass('navbar-dark');
		} else {
			navbar.removeClass('bg-light');
			navbar.removeClass('navbar-light');
			navbar.addClass('navbar-dark');
		}
	});
});
