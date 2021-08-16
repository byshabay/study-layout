$(document).ready(function () {
    // 1.HEADER BURGER START
    $(".header__burger").click(function (e) {
        $(".header__burger, .header__nav, .header__nav-block, .header__search").toggleClass('active');
    });
    // 1.HEADER BURGER END

    // 2.HEADER BACKGROUND AT SCROLL START
    $(document).scroll(function (e) {
        $(window).scrollTop() > 100 ? $(".header__nav-block").addClass("scroll") : $(".header__nav-block").removeClass("scroll");
    });
    // 2.HEADER BACKGROUND AT SCROLL END

    // 3.HEADER ACTIVE LINK START 
    $(".header__nav li a").each(function () {
        if (this.href == location.href) $(this).addClass('active-link');
    });

    // 3.HEADER ACTIVE LINK END

    // 4.CATALOG TABS START
    var tab = $("#tabs .catalog__items > div");
    tab.hide().filter(':first').show();

    $(".catalog__tab a").click(function (e) {
        tab.hide();
        $(this.hash).show();
        $(".catalog__tab a").removeClass("active-tab")
        $(this).addClass("active-tab");
        return false;
    });
    // 4.CATALOG TABS END




});