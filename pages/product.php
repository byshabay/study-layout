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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="../scripts/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
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
                <a href="#">mens -</a>
                <a href="#">casuals -</a>
                <a href="#">hoodies & sweatshirts -</a>
                <a href="#"><span>ave classic sweatshirt</span></a>

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
                    <span class="card__name">Ave classic sweatshirt </span>
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
                                <li class="review__social card__facebook"><a href="#">
                                    </a></li>
                                <li class="review__social card__tw"><a href="#">
                                    </a></li>
                                <li class="review__social card__gg"><a href="#">
                                    </a></li>
                                <li class="review__social card__pntr"><a href="#">
                                    </a></li>
                                <li class="review__social card__ig"><a href="#">
                                    </a></li>
                                <li class="review__social card__mail"><a href="#">
                                    </a></li>
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
                        <a href="#">Classic,</a>
                        <a href="#">Casual,</a>
                        <a href="#">V-neck,</a>
                        <a href="#">Loose</a>

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
                            <form class="card__qty-block">
                                <input class="card__list card__qty" type="number" value="1">
                                <input class="card__up" type="button" value=" + " id="up" />
                                <input class="card__down" type="button" value=" - " id="down" />
                            </form>

                        </div>

                    </div>
                    <div class="card__btns">
                        <button class="card__btn">
                            <div class="card__cart-img"></div>
                            <div> Add to cart </div>
                        </button>
                        <button class="card__btn">
                            <div class="card__like-img"></div>
                            <div> Add to lookbook</div>
                        </button>


                    </div>
                    <a href="#" class="card__compare">
                        <div class="card__compare-img"></div>
                        <div class="card__features-name">Add to compare</div>

                    </a>


                </div>
            </div>
            <div id="tabs" class="catalog__tabs">

                <ul class="catalog__tab">
                    <li>
                        <a class="active-tab" href="#tab-1">Description</a>
                    </li>
                    <li>
                        <a href="#tab-2">Video </a>
                    </li>
                    <li>
                        <a href="#tab-3">Size & Specs</a>
                    </li>
                    <li>
                        <a href="#tab-4">Delivery & Returns</a>
                    </li>
                    <li>
                        <a href="#tab-5">Reviews</a>
                    </li>
                </ul>
                <div class="catalog__items">
                    <div class="catalog__item card__desk-block" id="tab-1">
                        <div class="card__desk-h1">
                            Nunc egestas posuere enim, eu maximus erat posuere eget
                        </div>
                        <p class="card__desk-p">
                            Sed ut mi mollis, consequat nulla lacinia, hendrerit turpis. Nulla sapien magna, interdum quis pretium nec, pharetra at felis. Curabitur dictum sapien est, eget ultricies turpis porta vel. Nam suscipit nec lacus sed imperdiet. Vestibulum a purus risus. Nulla et dictum augue, nec efficitur mi. Nam sit amet pretium elit. Aliquam congue, ligula id vehicula vestibulum, orci ex vulputate lacus, ac malesuada elit dolor eget ex. Sed quis aliquet risus, ut cursus lectus. In eget lorem tellus.
                        </p>
                        <p>
                            Quisque eleifend varius nisi nec sagittis. Nulla ullamcorper imperdiet justo, ut venenatis purus lobortis ut. Nunc sagittis urna et hendrerit sodales. Nunc molestie risus nec fringilla lacinia. Nulla facilisi. Etiam neque velit, tristique eget sollicitudin eget, placerat at metus. Proin dictum lobortis velit, id suscipit orci faucibus ut. Aliquam erat volutpat. Vivamus feugiat justo in diam placerat, id dignissim elit auctor. Vestibulum scelerisque sem et lobortis ultricies. Morbi suscipit nulla urna. Suspendisse potenti. Nullam varius quam sed nisl dignissim, vel faucibus ipsum blandit. Vivamus at suscipit augue. Nam finibus gravida lorem eu viverra. Praesent rhoncus imperdiet ultricies. Nullam pretium cursus augue auctor vulputate. Quisque a convallis diam commodo eget diam id, eleifend dictum libero. Etiam varius, nisi vel dignissim sodales, enim dui posuere mauris, in aliquet lorem eros eget neque.
                        </p>
                    </div>
                    <div class="catalog__item" id="tab-2">
                        текст 2
                    </div>
                    <div class="catalog__item" id="tab-2">
                        текст 3
                    </div>
                    <div class="catalog__item" id="tab-2">
                        текст 4
                    </div>
                    <div class="catalog__item" id="tab-2">
                        текст 5
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