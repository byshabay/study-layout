<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/logo.ico" type="image/x-icon">
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="../scripts/slick.min.js"></script>
    <script src="../scripts/script.js"></script>
</head>

<body>
    <!-- 1.HEADER START -->
    <?php
    include("header.php")
    ?>
    <!-- 1.HEADER END -->
    <!-- 2.MAIN START -->
    <main class="main">
        <!-- 2.1.BANNER START -->
        <section class="prod-banner lb-banner">
            <h1>
                <span class="lb-banner__our">
                    product
                </span>
                <span>
                    view
                </span>
            </h1>
            <h2>
                mens - casuals - hoodies & sweatshirts - <span>ave classic sweatshirt</span>
            </h2>
        </section>

        <!-- 2.1.BANNER END -->
        <!-- 2.2.PRODUCT INFO START -->
        <section class="card container">
            <div class="card__top-info">

                <div class="card__slider">
                    <div class="card__slide">
                        <img src="../images/prod_1.png" alt="">
                    </div>
                    <div class="card__slide">
                        <img src="../images/cat_2.png" alt="">
                    </div>
                    <div class="card__slide">
                        <img src="../images/cat_1.png" alt="">
                    </div>
                    <div class="card__slide">
                        <img src="../images/cat_6.png" alt="">
                    </div>
                </div>

                <div class="card__features-1">
                    <a class="card__name" href="#">Ave classic sweatshirt </a>
                    <ul class="review__list">
                        <li class="review__items"><a href="#">
                                <ul>
                                    <li class="review__stars"><a href="#"><img src="../images/star.png" alt=""></a></li>
                                    <li class="review__stars"><a href="#"><img src="../images/star.png" alt=""></a></li>
                                    <li class="review__stars"><a href="#"><img src="../images/star.png" alt=""></a></li>
                                    <li class="review__stars"><a href="#"><img src="../images/star.png" alt=""></a></li>
                                    <li class="review__stars"><a href="#"><img src="../images/star_grey.png" alt=""></a></li>
                                </ul>
                                <a href="#" class="review__amount">3 Review(s)</a>
                            </a></li>
                        <li class="review__items"><a href="#">Add review</a></li>
                        <li class="review__items">
                            Share:
                            <ul class="review__social-list">
                                <li class="review__social"><a href="#"><img src="../images/facebook-grey.png" alt=""></a></li>
                                <li class="review__social"><a href="#"><img src="../images/twitter-grey.png" alt=""></a></li>
                                <li class="review__social"><a href="#"><img src="../images/google-grey.png" alt=""></a></li>
                                <li class="review__social"><a href="#"><img src="../images/pinterest-grey.png" alt=""></a></li>
                                <li class="review__social"><a href="#"><img src="../images/instagram-grey.png" alt=""></a></li>
                                <li class="review__social"><a href="#"><img src="../images/envelope.png" alt=""></a></li>
                            </ul>

                        </li>

                    </ul>
                    <div class="card__price">
                        <sup>&pound;</sup>
                        <span class="old-price">
                            107
                        </span>
                        <span class="card__sale">
                            <sup>&pound;</sup>
                            89.99
                        </span>
                    </div>
                    <p class="card__features-items">
                        <span class="card__features-name">
                            Availability:
                        </span>
                        In stock
                    </p>
                    <p class="card__features-items">
                        <span class="card__features-name">
                            Product Code:
                        </span>
                        #499577
                    </p>

                    <p class="card__features-items card__tags">
                        <span class="card__features-name">
                            Tags:
                        </span>
                        Classic, Casual, V-neck, Loose
                    </p>
                    <p class="card__features-items card__description">
                        Donec sem lorem laoreet tempor un risus vitae, rutrum sodales nibh suspendisse est congue metus nunc, id viverra elit loreti rhoncus quis consecteur es. Donec pulvinar tempor lorem a pretium justo interdum.
                    </p>
                    <ul class="card__features-items card__description">
                        <li>Elasticated cuffs</li>
                        <li>Casual fit</li>
                        <li>100% Cotton</li>
                        <li>Free shipping with 4 days delivery</li>
                    </ul>
                    <div class="card__features-lists">
                        <div class="card__features-list">
                            <div class="card__features-name">
                                Color
                            </div>
                            <select class="card__list">
                                <option value="" disabled selected>Select Colour</option>
                                <option value="1">EUR</option>
                                <option value="2">MYR</option>
                                <option value="3">HRD</option>
                                <option value="4">RUB</option>
                            </select>
                        </div>

                        <div class="card__features-list">
                            <div class="card__features-name">
                                Size
                            </div>
                            <select class="card__list">
                                <option value="" disabled selected>Select Size</option>
                                <option value="1">EUR</option>
                                <option value="2">MYR</option>
                                <option value="3">HRD</option>
                                <option value="4">RUB</option>
                            </select>
                        </div>
                        <div class="card__features-list">
                            <div class="card__features-name">
                                QTY
                            </div>
                            <input class="card__list card__qty" type="number" value="1">
                            <input type="button" value=" - " id="down" />
                            <input type="button" value=" + " id="up" />
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- 2.2.PRODUCT INFO START -->

    </main>
    <!-- 2.MAIN END -->
    <!-- 3.FOOTER START -->
    <?php
    include("footer.php");
    ?>
    <!-- 3.FOOTER END -->
</body>

</html>