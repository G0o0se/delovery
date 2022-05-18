<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <link href="/public/css/style.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" type="image/x-icon" href="/public/img/icon/favicon.ico">
    <title><?php echo $title ?></title>
</head>


<header>
    <div class="content">
        <a class="logo" href="/">
            <img alt="Logo" src="/public/img/system/logo.png">
        </a>
        <ul class="header-menu">
            <li class="item-menu"><a href="/#news">Новини</a></li>
            <li class="item-menu"><a href="/#category">Страви</a></li>
            <li class="item-menu"><a href="/contact">Контакти</a></li>
        </ul>
        <div class="header-menu-user">
            <div class="menu-user-item">
                <a href="/account/login">
                    <img alt="user icon" src="/public/img/icon/user.png">
                </a>
                    <?php if (isset($_SESSION['user'])) { ?>
                            <?php if ($_SESSION['user']['is_admin'] == '1') {?>
                            <a href="/admin/goods">
                                <p><?php echo $_SESSION['user']['name']?></p>
                            </a>
                        <?php } else {?>
                            <a href="/shop">
                                <p><?php echo $_SESSION['user']['name'];?></p>
                            </a>
                      <?php } ?>
                        <a href="/account/logout" title="Logout">
                            <img alt="" class="logout-img" src="/public/img/icon/logout.png">
                        </a>
                    <?php } else {
                        ?> <a href="/account/login"><p> <?php echo 'Вхід';
                    } ?></p></a>
            </div>
            <div class="menu-user-item">
                <?php
                if (isset($_SESSION['user'])) {
                    ?>
                <a href="/shop">
                    <?php
                } else { ?>
                    <a href="/account/login">
                        <?php
                } ?>
                    <img alt="" class="basket-img" src="/public/img/icon/basket.png">
                    <p>Кошик</p>
                </a>
            </div>
        </div>
    </div>
</header>

<body>

<?php echo $content; ?>
