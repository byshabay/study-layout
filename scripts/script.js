$(document).ready(function () {
    // 1.HEADER BURGER START
    // 1.1.MY HEADER BURGER

    $(".header__burger").click(function (e) {
        $(".header__burger, .header__nav, .header__nav-block, .header__search").toggleClass('active');
    });
    // 1.2.STRANGER HEADER BURGER
    $(".hamburger").click(function () {
        $(".hamburger, .header__nav, .header__nav-block, .header__search").toggleClass("is-active active")
    })

    // 1.HEADER BURGER END

    // 2.HEADER BACKGROUND AT SCROLL START

    $(document).scroll(function (e) {
        $(window).scrollTop() > 20 ? $(".header__nav-block, .home").addClass("scroll") : $(".header__nav-block, .home").removeClass("scroll");
    });

    // 2.HEADER BACKGROUND AT SCROLL END

    // 3.HEADER ACTIVE LINK START 

    $(".header__nav li a, .footer__menu a").each(function () {
        if (this.href == location.href) $(this).addClass('active-link');
    });

    // 3.HEADER ACTIVE LINK END

    // 4.CATALOG TABS START

    var tab = $(".catalog__items > div");
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

    // 8.CUSTOMIZED MAP START
    ymaps.ready(init);

    function init() {
        var myMap = new ymaps.Map("map", {
            center: [55.75985606898725, 37.61054750000002],
            zoom: 12
        });
        myMap.controls.add("zoomControl").add("typeSelector").add("mapTools");

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'London (честно)'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '../images/location-pin.png',
            iconImageSize: [30, 30]
        }),
            myMap.geoObjects.add(myPlacemark);
    }
    // 8.CUSTOMIZED MAP END 


    // 9.FORM VALIDATION
    $("#myForm").submit(function (e) {
        e.preventDefault();
        var email_1 = $("#email_1").val();
        var password_1 = $("#password_1").val();
        if (
            email_1.length > 4 &&
            email_1.match(/@+./)
        ) {
            $("#email_1").removeClass("error");
        } else {
            $("#email_1").addClass("error");
        }

        password_1.length < 6 ? $("#password_1").addClass("error") : $("#password_1").removeClass("error");
    })

    $("#myForm_2").submit(function (e) {
        e.preventDefault();
        var email = $("#email").val();
        var password_2 = $("#password_2").val();
        var password_3 = $("#password_3").val();
        var check = $("#check");

        if (
            email.length > 4 &&
            email.match(/@+./)
        ) {
            $("#email").removeClass("error");
        } else {
            $("#email").addClass("error");
        }


        password_2.length < 6 ? $("#password_2").addClass("error") : $("#password_2").removeClass("error");

        password_3.length < 6 ? $("#password_3").addClass("error") : $("#password_3").removeClass("error");

        if (check.attr("checked")) {
            $("#check").removeClass("error");
        } else {
            $("#check").addClass("error");
        }
    })

    // 9.FORM VALIDATION




});