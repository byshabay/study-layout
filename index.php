<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVENUE FASHION</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="scripts/script.js"></script>
</head>

<body>
    <!-- 1.HEADER START -->
    <?php 
        require("pages/header.php")
    ?>
    <!-- 1.HEADER END -->
    <!-- 2.MAIN START -->
    <main class="main">
        <!-- 2.1.BANNER START -->
        <section class="banner">
            <div class="container">
                <img class="banner__h1" src="images/ave.png" alt="AVE">
                <a class="banner__btn" href="#">shop men’s collection</a>
            </div>

        </section>
        <!-- 2.1.BANNER END -->

        <!-- 2.2.CATALOG START -->
        <section class="catalog container">
            <hr>
            <div id="tabs" class="catalog__tabs">

                <ul class="catalog__tab">
                    <li>
                        <a class="active-tab" href="#tab-1">Popular</a>
                    </li>
                    <li>
                        <a href="#tab-2">new arrivals </a>
                    </li>
                    <li>
                        <a href="#tab-3">best sellers</a>
                    </li>
                    <li>
                        <a href="#tab-4">special offers</a>
                    </li>
                    <li>
                        <a href="#tab-5">coming soon</a>
                    </li>
                </ul>
                <div class="catalog__items">
                    <div class="catalog__item" id="tab-1">
                        <section class="catalog__group-content">
                            <div class="catalog__prod-group catalog__prod-group-1">
                                <div class="catalog__two-items">
                                    <div class="product">
                                        <div class="product__price">
                                            <sup>&pound;</sup>
                                            20
                                        </div>
                                        <div class="product__info">
                                            <img src="images/info.png" alt="">
                                        </div>
                                        <img src="images/cat_1.png" alt="">
                                        <div class="product__descr">
                                            <div class="product__name">Womens burnt orange casual tee £29.95</div>
                                            <div>Classic casual t-shirt for women on the move.
                                                100% cotton.</div>
                                            <div class="product__btns">
                                                <a class="product__btn" href="#">
                                                    <div class="product__cart"></div>
                                                </a>
                                                <a class="product__btn" href="#">
                                                    <div class="product__wish"></div>
                                                </a>
                                                <a class="product__btn" href="#">
                                                    <div class="product__size"></div>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product__mini-imgs">
                                            <img src="images/front.png" alt="">
                                            <img src="images/back.png" alt="">
                                        </div>



                                    </div>
                                    <div class="product">
                                        <div class="product__price">
                                            <sup>&pound;</sup>
                                            20
                                        </div>
                                        <img src="images/cat_2.png" alt="">
                                        <div class="product__descr">
                                            <div class="product__name">Womens burnt orange casual tee £29.95</div>
                                            <div>Classic casual t-shirt for women on the move.
                                                100% cotton.</div>
                                            <div class="product__btns">
                                                <a class="product__btn" href="#">
                                                    <div class="product__cart"></div>
                                                </a>
                                                <a class="product__btn" href="#">
                                                    <div class="product__wish"></div>
                                                </a>
                                                <a class="product__btn" href="#">
                                                    <div class="product__size"></div>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product__mini-imgs">
                                            <img src="images/front.png" alt="">
                                            <img src="images/back.png" alt="">
                                        </div>
                                        <div class="product__info">
                                            <img src="images/info.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product__price">
                                        <sup>&pound;</sup>
                                        20
                                    </div>
                                    <img src="images/cat_3.png" alt="">
                                    <div class="product__descr">
                                        <div class="product__name">Womens burnt orange casual tee £29.95</div>
                                        <div>Classic casual t-shirt for women on the move.
                                            100% cotton.</div>
                                        <div class="product__btns">
                                            <a class="product__btn" href="#">
                                                <div class="product__cart"></div>
                                            </a>
                                            <a class="product__btn" href="#">
                                                <div class="product__wish"></div>
                                            </a>
                                            <a class="product__btn" href="#">
                                                <div class="product__size"></div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product__mini-imgs">
                                        <img src="images/front.png" alt="">
                                        <img src="images/back.png" alt="">
                                    </div>
                                    <div class="product__info">
                                        <img src="images/info.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="catalog__prod-group catalog__prod-group-2">
                                <div class="product">
                                    <div class="product__price sale">
                                        <sup>&pound;</sup>
                                        <div class="catalog__old-price">
                                            20
                                        </div>
                                        <div class="product__sale">
                                            <sup>&pound;</sup>
                                            20
                                        </div>
                                    </div>

                                    <img src="images/cat_4.png" alt="">
                                    <div class="product__descr">
                                        <div class="product__name">Womens burnt orange casual tee £29.95</div>
                                        <div>Classic casual t-shirt for women on the move.
                                            100% cotton.</div>
                                        <div class="product__btns">
                                            <a class="product__btn" href="#">
                                                <div class="product__cart"></div>
                                            </a>
                                            <a class="product__btn" href="#">
                                                <div class="product__wish"></div>
                                            </a>
                                            <a class="product__btn" href="#">
                                                <div class="product__size"></div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="product__mini-imgs">
                                        <img src="images/front.png" alt="">
                                        <img src="images/back.png" alt="">
                                    </div>
                                    <div class="product__info">
                                        <img src="images/info.png" alt="">
                                    </div>
                                </div>
                                <div class="catalog__two-items">
                                    <div class="product">
                                        <div class="product__price">
                                            <sup><sup>&pound;</sup></sup>
                                            20
                                        </div>
                                        <img src="images/cat_2.png" alt="">
                                        <div class="product__descr">
                                            <div class="product__name">Womens burnt orange casual tee £29.95</div>
                                            <div>Classic casual t-shirt for women on the move.
                                                100% cotton.</div>
                                            <div class="product__btns">
                                                <a class="product__btn" href="#">
                                                    <div class="product__cart"></div>
                                                </a>
                                                <a class="product__btn" href="#">
                                                    <div class="product__wish"></div>
                                                </a>
                                                <a class="product__btn" href="#">
                                                    <div class="product__size"></div>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product__mini-imgs">
                                            <img src="images/front.png" alt="">
                                            <img src="images/back.png" alt="">
                                        </div>
                                        <div class="product__info">
                                            <img src="images/info.png" alt="">
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product__price">
                                            <sup><sup>&pound;</sup></sup>
                                            20
                                        </div>
                                        <img src="images/cat_6.png" alt="">
                                        <div class="product__descr">
                                            <div class="product__name">Womens burnt orange casual tee £29.95</div>
                                            <div>Classic casual t-shirt for women on the move.
                                                100% cotton.</div>
                                            <div class="product__btns">
                                                <a class="product__btn" href="#">
                                                    <div class="product__cart"></div>
                                                </a>
                                                <a class="product__btn" href="#">
                                                    <div class="product__wish"></div>
                                                </a>
                                                <a class="product__btn" href="#">
                                                    <div class="product__size"></div>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product__mini-imgs">
                                            <img src="images/front.png" alt="">
                                            <img src="images/back.png" alt="">
                                        </div>
                                        <div class="product__info">
                                            <img src="images/info.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="catalog__item" id="tab-2">
                        текст 2
                    </div>
                </div>
            </div>
            <hr>
        </section>
        <!-- 2.2.CATALOG END -->

        <!-- 2.3.LOOKBOOK START-->
        <?php
            include("pages/lb-blocks.php");
        ?>
        <!-- 2.3.LOOKBOOK END-->
    </main>
    <!-- 2.MAIN END -->
    <!-- 3.FOOTER START -->
    <?php
        require("pages/footer.php");
    ?>
    <!-- 3.FOOTER END -->

</body>

</html>