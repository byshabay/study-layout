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
        <!-- 2.2.AUTH START -->
        <section class="container">
            <form class="auth__form auth__sign-block">
                <h2 class="title-p">Sign in</h2>
                <input type="email" placeholder="Your Email" require>
                <input type="password" placeholder="Your password" require>
                <div class="ayth__btn-block">
                    <input class="btn__view" type="button" value="Sign in">
                    <a href="#">Forgot your Password &rarr;</a>
                </div>
            </form>

            <form class="auth__form auth__sign-block">
                <h2 class="title-p">register</h2>
                <input type="email" placeholder="Your Email" require>
                <input type="password" placeholder="Your password" require>
                <input type="password" placeholder="Confirm password" require>
                <input type="checkbox" name="ok" id="ok">
                <label for="ok">Sign up for exclusive updates, discounts, new arrivals, contests, and more!"</label>
                <div class="ayth__btn-block">
                    <input class="btn__view" type="button" value="Create account">
                    <span>
                        By clicking ‘Create Account’, you
                        agree to our <a href="#"> Privacy Policy &rarr;</a>
                    </span>

                </div>
            </form>
        </section>
        <!-- 2.2.AUTH END -->
    </main>
    <!-- 2.MAIN END -->
    <!-- 3.FOOTER START -->
    <?php
    include("footer.php");
    ?>
    <!-- 3.FOOTER END -->

</body>

</html>