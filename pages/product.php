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