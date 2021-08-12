$(document).ready(function () {
    // HEADER BURGER START
    $(".header__burger").click(function (event) {
        $(".header__burger, .header__nav, .header__nav-block").toggleClass('active');
    });

    // HEADER BURGER END

    //CATALOG TABS
    $('.catalog__tab').click(function (event) {

        $(".catalog__tab").toggleClass("active");
    });
});