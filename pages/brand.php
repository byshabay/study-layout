<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE BRAND</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="../scripts/script.js"></script>
</head>

<body>
    <!-- 1.HEADER START -->
    <?php
    include("header.php");
    ?>
    <!-- 1.HEADER END -->
    <!-- 2.MAIN START -->
    <main class="main brand">
        <!-- 2.1.BANNER START -->
        <section class="common-banner">
            <h1>
                <span class="common-banner__h1">
                    The
                </span>
                <span>
                    brand
                </span>
            </h1>
            <h2>
                Company slogan goes here
            </h2>
        </section>
        <!-- 2.2.BANNER END -->

        <!-- 2.2.CONTENT START -->
        <section class="content container">
            <div class="content__column content__column-1">
                <img class="content__img" src="../images/brand-1.png" alt="">
                <img class="content__img" src="../images/brand-2.png" alt="">
                <div>
                    <span class="title-p">
                        our values, vision and strategy

                    </span>
                    <p class="title-p content__title">
                        The above image would be a great place for an advertising video
                    </p>
                    <p>
                        Cras maximus venenatis malesuada. Nulla sagittis elit felis, ac facilisis quam ornare aliquam. Etiam cursus odio vitae dui dignissim, sed tempus lacus tincidunt et donec sapien velit, rhoncus eu nulla a, molestie tempus mi maecenas sagittis ornare.
                        <br> Pellentesque sapien mi, <a href="#"> tincidunt nec magna vitae</a>, volutpat elementum odioni lorem Aliquam tempor massa vitae augue mattis tempor id in ante ut augue erat, luctus eil.

                    </p>
                </div>

            </div>
            <div class="content__column content__column-2">
                <div class="content__text-2">
                    <span class="title-p">
                        hand designed clothing
                    </span>
                    <p class="title-p content__title">
                        established in 2013, avenue fashion Sed dictum elit vel sapien luctus eras
                    </p>
                    <p>
                        Praesent feugiat malesuada tristique maecenas rhoncus diam eget quam vestibulim consectetur, id condimentum leo porttitor. Cum sociis natoque penatibus eta magnis disut parturient montes, nascetur ridiculus mus. Donec sem lorem laoreet tempor un risus vitae, rutrum sodales nibh suspendisse congue metus nunc, id viverra elit loreti rhoncus quis consecteur es. Donec pulvinar tempor lorem a pretium justo interdum.
                    </p>
                </div>
                <img class="content__img" src="../images/brand-3.png" alt="">
                <div class="content__text-3">
                    <span class="title-p">
                        Ethical trading
                    </span>
                    <p class="title-p content__title">
                        we oversee the working conditions of the people in the supply chain
                    </p>
                    <p>
                        Nullam dapibus consectetur neque, faucibus porttitor purus iaculis sed. Aenean eras dapibus augue, eget dignissim dui maecenas et rhoncus mim, vel semper arcu lorem
                        Pellentesque congue justo esteir pellentesque aliquet massa eget posuere tincidunt.
                        Cras viverra ullamcorper nunc accumsan hendrerit. <a href="#"> A link &rarr; </a>

                    </p>
                </div>
                <div class="content-awards">
                    <img src="../images/award-1.png" alt="" class="content__avard">
                    <img src="../images/award-2.png" alt="" class="content__avard">
                    <img src="../images/award-3.png" alt="" class="content__avard">
                </div>

            </div>

        </section>
        <!-- 2.2.CONTENT END -->

    </main>
    <!-- 2.MAIN END -->
    <!-- 3.FOOTER START -->
    <?php
    include("footer.php")
    ?>
    <!-- 3.FOOTER END -->
</body>

</html>