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
    <div class="name-contents">
        <h1 id="name"></h1>
    </div>
    <div class="menu-main-item">
        <?php foreach ($goods as $goods) : ?>
                <div class=food-item-small-img>
                    <img class="img-item" src="/public/img/<?= $goods->getImage() ?>" alt="">
                    <div class=item-info>
                        <h1><?= $goods->getName() ?></h1>
                        <p><?= $goods->getDescription() ?></p>
                        <div class=item-cost>
                            <h1>₴<?= $goods->getPrice() ?></h1>
                            <input type="hidden" name="product_id" value="<?= $goods->getId() ?>">
                            <?php if (isset($_SESSION['user'])) { ?>
                                <button class="btn-add" product_id="<?= $goods->getId() ?>" product_price="<?= $goods->getPrice() ?>"></button>
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
<footer>
    <ul class="footer-menu">
        <li class="menu-item">© 2022. All you need. Food delivery</li>
    </ul>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="../public/js/main.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('.btn-add').click(function(){
            var id = $(this).attr("product_id");
            var price = $(this).attr("product_price");
            $.post("/shop/add", {id: id, price: price}, function () {});
        });
    });
</script>
</body>

</html>