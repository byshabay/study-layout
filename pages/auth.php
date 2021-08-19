<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/logo.ico" type="image/x-icon">
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="../scripts/slick.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU"></script>
    <script src="../scripts/script.js"></script>
</head>

<body>
    <!-- 1.HEADER START -->
    <?php
    include("header.php");
    ?>
    <!-- 1.HEADER END -->
    <!-- 2.MAIN START -->
    <main class="main auth">
        <!-- 2.1.BANNER START -->
        <section class="common-banner">
            <h1>
                <span class="common-banner__h1">
                    welcome
                </span>
                <span>
                    to ave
                </span>
            </h1>
            <h2>
                sign in or register
            </h2>
        </section>
        <!-- 2.1.BANNER END -->
        <!-- 2.2.AUTH CONTENT START -->
        <section class="container">
            <form novalidate id="myForm" class="auth__form auth__sign-block">
                <h2 class="title-p">Sign in</h2>
                <input id="email_1" type="email" placeholder="Your Email..." required>
                <input id="password_1" type="password" placeholder="Your password..." required>
                <div class="auth__btn-block">
                    <button class="auth__btn" type="submit">sign in</button>
                    <a href="#">Forgot your Password &rarr;</a>
                </div>
            </form>

            <form id="myForm_2" novalidate class="auth__form auth__reg-block">
                <h2 class="title-p">register</h2>
                <input id="email" type="email" placeholder="Your Email..." required>
                <input id="password_2" type="password" placeholder="Your password..." required>
                <input id="password_3" type="password" placeholder="Confirm password" required>
                <input id="check" class="auth__check-box" type="checkbox" name="ok" required>
                <label class="auth__check" for="check">Sign up for exclusive updates, discounts, new arrivals, contests, and more!"</label>

                <div class="auth__btn-block auth__btn-block-2">
                    <button class="auth__btn" type="submit">Create account</button>
                    <span>
                        By clicking ‘Create Account’, you
                        agree to our <a href="#"> Privacy Policy &rarr;</a>
                    </span>

                </div>
            </form>
        </section>
        <!-- 2.2.AUTH CONTENT END -->
    </main>
    <!-- 2.MAIN END -->
    <!-- 3.FOOTER START -->
    <?php
    include("footer.php");
    ?>
    <!-- 3.FOOTER END -->

</body>

</html>