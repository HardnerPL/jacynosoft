$(document).scroll(function(){
	change_navbar();
});

$(document).ready(function(){
	change_navbar();
});

function change_navbar() {
	var navbar = $(".navbar");
	if ($(this).scrollTop() + navbar.height() >= $("#motto-container").height()) {
		navbar.addClass('navbar-scrolled');
	} else {
		navbar.removeClass('navbar-scrolled');
	}
}
