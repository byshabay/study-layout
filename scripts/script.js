$(document).ready(function () {
    // HEADER BURGER START
    $(".header__burger").click(function (e) {
        $(".header__burger, .header__nav, .header__nav-block").toggleClass('active');
    });
    // HEADER BURGER END

    // HEADER BACKGROUND AT SCROLL START
    $(document).scroll(function (e) {
        $(window).scrollTop() > 100 ? $(".header__nav-block").addClass("scroll") : $(".header__nav-block").removeClass("scroll");
    });
    // HEADER BACKGROUND AT SCROLL END

    // CATALOG TABS START
    var tab = $("#tabs .catalog__items > div");
    tab.hide().filter(':first').show();

    $(".catalog__tab a").click(function (e) {
        tab.hide();
        $(this.hash).show();
        $(".catalog__tab a").removeClass("active-tab")
        $(this).addClass("active-tab");
    });
    // CATALOG TABS END



});