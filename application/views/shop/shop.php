<div class="content-block">
    <div class="container">
        <div class="title-lk">
            <h1>Кошик</h1>
        </div>
    </div>
</div>

<div class="shop-cart">
    <div class="delivery-cart">
        <div class="delivery-time">
            <h2>Час доставки</h2>
            <div class="asap-btn">
                <button class="btn-asap">
                    Приблизно (40 - 50 хвилин)
                </button>
            </div>
        </div>
        <div class="delivery-addaddress">
            <h2>Тип доставки</h2>
            <form action="/shop/addAdress" method="post">
                <input name="adress" class="input-form" placeholder="Введіть адресу доставки" required type="text"/>
                <button type="submit" style="text-align: center; padding: 15px; width: 200px; line-height: 0" class="btn-add-address" value="Змінити адресу">Змінити адресу</button>
            </form>
        </div>
        <form action="/shop/order" method="post" name="order">
            <div class="delivery-address">
                <?php foreach ($user as $user) : ?>
                    <?php if ($user->getAdress() == NULL) { ?>

                    <?php } else { ?>
                        <div class="delivery-radio">
                            <input type="radio" name="delivery" value="<?= $user->getAdress() ?>"/>
                            <h2 style="text-overflow: ellipsis; overflow: hidden;"><?= $user->getAdress() ?></h2>
                        </div>
                    <?php } ?>
                <?php endforeach; ?>
                <div class="delivery-radio">
                    <input type="radio" name="delivery" checked value="Замовивіз"/>
                    <h2>Замовивіз</h2>
                </div>
            </div>
            <div class="delivery-method">
                <h2>Метод оплати</h2>
                <div class="delivery-radio">
                    <input type="radio" name="payment" value="Готівка" checked>
                    <h2>Готівка</h2>
                </div>
                <div class="delivery-radio">
                    <input type="radio" name="payment" value="Картка">
                    <h2>Картка</h2>
                </div>
            </div>
    </div>
    </form>
    <div class="basket">
        <?php if (!empty($_SESSION['products'])) { ?>
            <?php foreach ($goods as $goods) : ?>
                <div class="basket-order">
                    <div class="img-food"><img alt="" src="/public/img/<?= $goods->getImage() ?>" height="100px"></div>
                    <div class="food">
                        <div class="food-cont">
                            <div class="basket-name">
                                <div class=location-item>
                                    <p><span><?= $goods->getCategory() ?></span></p>
                                </div>
                                <div class="basket-name-item">
                                    <h2><?= $goods->getName() ?></h2></div>
                            </div>
                        </div>
                        <div class="info-food">
                            <div class="quan-food">
                                <button class="button-minus" product_id="<?= $goods->getId() ?>">
                                    <div class="button__arrow button__arrow--left"></div>
                                </button>
                                <span><?= $_SESSION['products'][$goods->getId()]['count'] ?></span>

                                <button class="button-add" product_id="<?= $goods->getId() ?>">
                                    <div class="button__arrow button__arrow--right"></div>
                                </button>
                            </div>
                            <div class="cost-food">₴<span><?= $goods->getPrice() * $_SESSION['products'][$goods->getId()]['count'] ?></span></div>
                            <div class="deleted-order">
                                <button class="btn-deleted" product_id="<?= $goods->getId() ?>">
                                    <svg fill="#ab3e39" height="6px" id="Layer-1"
                                         viewBox="0 0 492 492" width="6px" x="0px"
                                         xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                         y="0px">
                                                                <g>
                                                                    <g>
                                                                        <path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872
                                c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872
                                c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052
                                L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116
                                c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952
                                c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116
                                c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z"/>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="place-order">
                <div class="total-order">
                    <h2> До сплати (при одержанні): </h2> <span>₴<?= $_SESSION['cart_coast'] ?></span><br><br>
                </div>
                <p>
                    <button onclick="submitForms()" type="submit" style="background-color: #ab3e39; text-align: center; width: 180px;" class="btn-place" value="Замовити">Замовити</button>
                </p>
            </div>

        <?php } else { ?>

            <div class="place-order" style="justify-content: center">
                <div class="total-order">
                    <h2 style="text-align: center"> Кошик пустий </h2>
                </div>
            </div>

        <?php } ?>
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
    submitForms = function () {
        document.forms["order"].submit();
    }

    $(document).ready(function () {
        $('.button-add').click(function () {
            var id = $(this).attr("product_id");
            $.post("/shop/plus", {id: id}, function () {
                location.reload();
            });
        });
        $('.button-minus').click(function () {
            var id = $(this).attr("product_id");
            $.post("/shop/minus", {id: id}, function () {
                location.reload();
            });
        });
        $('.btn-deleted').click(function () {
            var id = $(this).attr("product_id");
            $.post("/shop/delete", {id: id}, function () {
                location.reload();
            });
        });
    });
</script>
</body>

</html>