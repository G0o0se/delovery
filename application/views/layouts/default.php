<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <link href="/public/css/style.css" rel="stylesheet" type="text/css"/>
    <title><?php echo $title?></title>
</head>



<header>
    <div class="content">
        <a class="logo" href="/">
            <img alt="Logo" src="/public/img/logo.png">
        </a>
        <ul class="header-menu">
            <li class="item-menu"><a href="/">Home</a></li>
            <li class="item-menu"><a href="">Services</a></li>
            <li class="item-menu"><a href="">FAQ</a></li>
            <li class="item-menu"><a href="">Contact Us</a></li>
        </ul>
        <div class="header-menu-user">
            <div class="menu-user-item">
                <a href="/account/login">
                <img alt="" src="/public/img/icon/user.png">
                <p>My Account</p>
                </a>
            </div>
            <div class="menu-user-item">
                <a href="/shop">
                <img alt="" src="/public/img/icon/basket.png">
                <p>My Cart</p>
                </a>
            </div>
        </div>
    </div>
</header>

<body>

<?php echo $content; ?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="/public/js/popup.js" type="text/javascript"></script>

<footer>
    <ul class="footer-menu">
        <li class="menu-item"><a href="">Food delivery</a></li>
        <li class="menu-item"><a href="">Group Orders</a></li>
        <li class="menu-item"><a href="">Pickup</a></li>
        <li class="menu-item"><a href="">About Us</a></li>
        <li class="menu-item"><a href="">Contact Us</a></li>
        <li class="menu-item">© 2021. All you need. Food delivery & more</li>
    </ul>
</footer>

</body>
</html>