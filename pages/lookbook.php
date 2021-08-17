<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOKBOOK</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/logo.ico" type="image/x-icon">
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="../scripts/script.js"></script>
</head>

<body>
    <!-- 1.HEADER START -->
    <?php
    require("header.php")
    ?>
    <!-- 1.HEADER END -->

    <!-- 2.MAIN START -->
    <main class="lb-main main">
        <!-- 2.1. BANNER START -->
        <section class="lb-banner">
            <h1>
                <span class="lb-banner__our">
                    Our
                </span>
                <span>
                    lookbook
                </span>
            </h1>
            <h2>
                Latest Posts - mens & womens
            </h2>
        </section>
        <!-- 2.1. BANNER END -->

        <!-- 2.2. CATALOG START -->
        <section class="catalog container lb-catalog">
            <hr>
            <div id="tabs" class="catalog__tabs">

                <ul class="catalog__tab">
                    <li>
                        <a class="active-tab" href="#tab-1">Latest</a>
                    </li>
                    <li>
                        <a href="#tab-2">Most Liked </a>
                    </li>
                    <li>
                        <a href="#tab-3">best sellers</a>
                    </li>
                    <li>
                        <a href="#tab-4">Price low to hight</a>
                    </li>
                    <li>
                        <a href="#tab-5">Price hight to low</a>
                    </li>
                </ul>
                <div class="catalog__items">
                    <div class="catalog__item" id="tab-1">
                        <section class="catalog__group-content">
                            <div class="product">
                                <div class="product__price">
                                    <sup>REF</sup>
                                    M1
                                </div>
                                <a href="/study-layout/pages/product.php"> <img src="../images/cat_1.png" alt=""> </a>
                                <div class="product__info">
                                    <img src="../images/info.png" alt="">
                                    <img src="../images/lb-wish.png" alt="">
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__price">
                                    <sup>REF</sup>
                                    M1
                                </div>
                                <a href="product.php"><img src="../images/cat_2.png" alt=""></a>
                                <div class="product__info">
                                    <img src="../images/info.png" alt="">
                                    <img src="../images/lb-wish.png" alt="">
                                </div>
                            </div>
                            <div class="product jenes">

                                <span class="jenes__h1">
                                    Jane’s
                                    <span>lookbook</span>
                                </span>

                                <p class="jenes__text-1">
                                    get the look for under £200!
                                </p>
                                <p class="jenes__text-2">
                                    We invited actress Jane Marshall to join us
                                    for the day and choose her perfect outfit from
                                    our vast range of womens fashion.
                                </p>
                                <p>

                                    This is of course not true as this is just a design
                                    for a website and this is simply filler text.
                                </p>
                                <a href="#" class="jenes__btn btn__view"> view now</a>

                            </div>

                            <div class="product">
                                <div class="product__price">
                                    <sup>REF</sup>
                                    M1
                                </div>
                                <img src="../images/cat_1.png" alt="">

                                <div class="product__info">
                                    <img src="../images/info.png" alt="">
                                    <img src="../images/lb-wish.png" alt="">
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__price">
                                    <sup>REF</sup>
                                    M1
                                </div>
                                <img src="../images/cat_6.png" alt="">

                                <div class="product__info">
                                    <img src="../images/info.png" alt="">
                                    <img src="../images/lb-wish.png" alt="">
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__price">
                                    <sup>REF</sup>
                                    M1
                                </div>
                                <img src="../images/cat_1.png" alt="">

                                <div class="product__info">
                                    <img src="../images/info.png" alt="">
                                    <img src="../images/lb-wish.png" alt="">
                                </div>
                            </div>
                            <div class="product">
                                <div class="product__price">
                                    <sup>REF</sup>
                                    M1
                                </div>
                                <img src="../images/cat_2.png" alt="">

                                <div class="product__info">
                                    <img src="../images/info.png" alt="">
                                    <img src="../images/lb-wish.png" alt="">
                                </div>
                            </div>
                            <div class="product win">
                                <span class="jenes__h1 win__h1">
                                    Win <span> a new look!</span>
                                </span>
                                <p class="jenes__text-1">
                                    add looks or items to your lookbook for a chance of winning </p>


                                <p class="jenes__text-2">See an item or a complete look you like, click the  button to add it to your
                                    lookbook and you’ll be automatically entered to our monthly draw where
                                    one winner gets a <b>£300</b> gift voucher to spend on our website! </p>

                                <p>Terms: No purchase necessary. Vouchers are non-transferable and no
                                    cash alternative is ofered. Competition is for members only. </p>
                                <a href="#" class="jenes__btn btn__view"> Shop now</a>


                            </div>
                            <div class="product">
                                <div class="product__price">
                                    <sup>REF</sup>
                                    M1
                                </div>
                                <img src="../images/cat_1.png" alt="">
                                <div class="product__info">
                                    <img src="../images/info.png" alt="">
                                    <img src="../images/lb-wish.png" alt="">
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
        <!-- 2.2. CATALOG END -->
        <!-- 2.3. LOOKBOOKS BLOCK START -->
        <?php
        include("lb-blocks.php");
        ?>
        <!-- 2.3. LOOKBOOKS BLOCK END -->
    </main>

    <!-- 3. FOOTER START -->
    <?php
    include("footer.php");
    ?>

    <!-- 3. FOOTER END -->

    <!-- 2.MAIN END -->


</body>

</html>