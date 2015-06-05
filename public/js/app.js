
const navVarPosition =  $("#nav-menu-main").position();
$(window).bind('scroll', function () {
	console.log(navVarPosition.top);
    if ($(window).scrollTop() >= navVarPosition.top) {
        $('#nav-menu-main').addClass('navbar-fixed-top');
    }else{
        $('#nav-menu-main').removeClass('navbar-fixed-top');
    }
});