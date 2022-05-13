<?php $url = mb_strimwidth($_SERVER['REQUEST_URI'], 6, 10) ?>
<div class="delivery-img"></div>

<div class="cont-menu">
    <ul class="menu-shop">
        <?php foreach ($category as $categories) :
            if ($name = $categories->getName() == $url) { ?>
                <li class="active">
                    <a class="item-shop" href="<?= $categories->getUrl() ?>"><?= $categories->getName() ?></a>
                </li>
            <?php } else { ?>
                <li>
                    <a class="item-shop" href="<?= $categories->getUrl() ?>"><?= $categories->getName() ?></a>
                </li>
            <?php } ?>
        <?php endforeach; ?>
    </ul>
</div>

<div class="container-rest">
    <div class="name-content">
        <h1 id="name"></h1>
    </div>
    <div class="menu-main-item">
        <?php foreach ($goods as $goods) : ?>
            <div class=food-item-small-img>
                <img class="img-item" src="../public/img/goods/<?= $url ?>/<?= $goods->getImage() ?>" alt="">
                <div class=item-info>
                    <h2><?= $goods->getName() ?></h2>
                    <p><?= $goods->getDescription() ?></p>
                    <div class=item-cost>
                        <h1>₴<?= $goods->getPrice() ?></h1>
                        <?php if (isset($_SESSION['logged_user'])) { ?>
                            <a href="/shop/add">
                                <button class=btn-add></button>
                            </a>
                        <?php } else { ?>
                            <a href="/account/login">
                                <button class=btn-add></button>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>