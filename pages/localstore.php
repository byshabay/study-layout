<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOCAL STORES</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/logo.ico" type="image/x-icon">
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU"></script>
    <script src="../scripts/slick.min.js"></script>
    <script src="../scripts/script.js"></script>
</head>

<body>
    <!-- 1.HEADER START -->
    <?php
    include("header.php");
    ?>
    <!-- 1.HEADER END -->
    <!-- 2.MAIN START -->
    <main class="main localstore">
        <!-- 2.1.BANNER START -->
        <section class="common-banner">
            <h1>
                <span class="common-banner__h1">
                    Local
                </span>
                <span>
                    stores
                </span>
            </h1>
            <h2>
                find a store near you
            </h2>
        </section>
        <!-- 2.1.BANNER END -->
        <!-- 2.2.ADDRESSES START-->
        <section class="addresses">
            <div class="addresses__tabs container catalog__tab">
                <div class="addresses__tab">
                    <span class="title-p">
                        London

                    </span>
                    <p class="title-p content__title">
                        180-182 Regent Street, London, W1B 5BT </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing esi elit. Vivamus at arcu sem. Vestibulum ornare eleifendit massa, nec tempor odio. Fusce posuere nunc iaculis ligula viverra iaculis. Aliquam erat volutpat.
                    </p>
                    <a class="btn__view active-tab" href="#london">View details</a>

                </div>
                <div class="addresses__tab">
                    <span class="title-p">
                        New York

                    </span>
                    <p class="title-p content__title">
                        109 Columbus Circle, New York, NY 10023 </p>
                    <p>
                        Nunc non posuere nisl. Etiam finibus vel dui nec lobortis. Aliquam egestas, sem quis condimentum venenatis, erat leo fermentum dolor, non sollicitudin massa mi eu nibh. Nullam vitae aliquam dui, non sodales nisl.
                    </p>
                    <a class="btn__view" href="#new-york">View details</a>

                </div>
                <div class="addresses__tab">
                    <span class="title-p">
                        Paris

                    </span>
                    <p class="title-p content__title">
                        2133 Rue Saint-Honoré, 75001 Paris </p>
                    <p>
                        Ut interdum fermentum blandit. Donec nec lacus egetit mi rhoncus eleifend. Curabitur laoreet nisl eget rutruml auctor. Vestibulum ante ipsum primis in faucibus orcip luctus et ultrices posuere cubilia curae cras ligula.
                    </p>
                    <a class="btn__view" href="#paris">View details</a>

                </div>

            </div>
            <div class="addresses__items catalog__items">
                <div id="london" class="addresses__item">
                    <div id="map" class="map">
                        <!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aea7329b26fcbef4fe80ebe1de81544ce21bbb1f601f377168d17731a0d38019e&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true">
                        </script> -->

                    </div>

                    <div class="addresses__tab">
                        <span class="title-p">
                            London

                        </span>
                        <p class="title-p content__title">
                            180-182 Regent Street, London, W1B 5BT </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing esi elit. Vivamus at arcu sem. Vestibulum ornare eleifendit massa, nec tempor odio. Fusce posuere nunc iaculis ligula viverra iaculis. Aliquam erat volutpat.
                        </p>
                        <div class="addresses__info">
                            <div>
                                <img class="addresses__info-icon" src="../images/pin.png" alt="">
                                <span>
                                    180-182 Regent Street, London, W1B 5BT
                                </span>

                            </div>
                            <div>
                                <img class="addresses__info-icon" src="../images/phone-call.png" alt="">
                                <span>
                                    <a href="tel:0123456789">0123-456-789</a>
                                </span>
                            </div>
                            <div>

                                <img class="addresses__info-icon" src="../images/url.png" alt="">
                                <span>
                                    <a href="#">www.yourwebsite.com</a>
                                </span>
                            </div>
                            <div>
                                <img class="addresses__info-icon" src="../images/envelope.png" alt="">
                                <span>
                                    <a href="mailto:support@yourwebsite.com"> support@yourwebsite.com</a>
                                </span>
                            </div>
                            <div>
                                <img class="addresses__info-icon" src="../images/clock.png" alt="">
                                <span>
                                    Monday-Friday: 9am to 6pm Saturday: 10am to 6pm Sunday: 10am to 2pm
                                </span>

                            </div>
                        </div>
                        <div class="addresses__social">
                            <a class="addresses__soc-ico fb" href="#"></a>
                            <a class="addresses__soc-ico tw" href="#"></a>
                            <a class="addresses__soc-ico ig" href="#"></a>
                            <a class="addresses__soc-ico ptrs" href="#"></a>
                        </div>


                    </div>
                </div>
                <div id="new-york">
                    2
                </div>
                <div id="paris">
                    3
                </div>
            </div>


        </section>

        <!-- 2.2.ADDRESSES END -->
    </main>
    <!-- 2.MAIN END -->
    <!-- 3.FOOTER START -->
    <?php
    include("footer.php");
    ?>
    <!-- 3.FOOTER END -->

</body>

</html>