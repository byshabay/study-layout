$(document).ready(function () {
    // 1.HEADER BURGER START

    $(".header__burger").click(function (e) {
        $(".header__burger, .header__nav, .header__nav-block, .header__search").toggleClass('active');
    });

    // 1.HEADER BURGER END

    // 2.HEADER BACKGROUND AT SCROLL START

    $(document).scroll(function (e) {
        $(window).scrollTop() > 20 ? $(".header__nav-block, .home").addClass("scroll") : $(".header__nav-block, .home").removeClass("scroll");
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

    // 5.SLIDER START

    $(".card__slider").slick();

    // 5.SLIDER END

    // 6.QTY COUNTER START
    var val = $('.card__qty').val();

    $("#down").click(function (e) {
        val--;
        $('.card__qty').val(val);
    });
    $("#up").click(function (e) {
        val++;
        $('.card__qty').val(val);
    });
    // 6.QTY END

    // 7.FIX SLICK + FANCYBOX START

    $(".slick-cloned a").removeAttr("data-fancybox");

    // 7.FIX SLICK + FANCYBOX END




});