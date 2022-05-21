<div class="cont-menu">
    <ul class="menu-shop">
        <li>
            <a class="item-shop" href="/admin/category">Категорії</a>
        </li>
        <li>
            <a class="item-shop-active" href="/admin/goods">Страви</a>
        </li>
        <li>
            <a class="item-shop" href="/admin/order">Замовлення</a>
        </li>
        <li>
            <a class="item-shop" href="/admin/news">Новини</a>
        </li>
    </ul>
</div>
<div class="update">
<?php foreach ($goods as $goods) : ?>
    <div class="update-class">
        <form enctype="multipart/form-data" method='post'>
            <input type="hidden" class="input-form" name='id' value='<?= $goods->getId(); ?>'/> <br>
            <b>Назва</b>: <input class="input-form" name='name' value='<?= $goods->getName() ?>'/> <br>
            <b>Ціна</b>: <input class="input-form" name='price' type="number" placeholder="0" required min="50" step="5" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" value='<?= $goods->getPrice() ?>'/> <br>
            <b>Опис</b>: <input class="input-form" name='description' value='<?= $goods->getDescription() ?> '/> <br>
            <input type="hidden" class="input-form" name='defaultcategory' value='<?= $goods->getCategory() ?> '/>
            <b>Категорія</b>:
            <select name="categories" class="input-form" style="height: 29px;color: grey;font-size: 13px;">
                <option value="1" selected>Виберіть категорію</option>
                <?php foreach ($category as $categories) : ?>
                    <option value="<?= $categories->getName() ?>"><?= $categories->getName() ?></option>
                <?php endforeach; ?>
            </select> <br>
            <input type="hidden" name="MAX_FILE_SIZE" value="30000000"/>
            <b>Фото</b>: <input name="image" class="input-form" type="file" multiple accept="image/jpeg,image/png"/> <br>
            <input class="input-form" type="hidden" name='imagedefault' value='<?= $categories->getImage() ?>'/><br><br>
            <button name="editing" type="submit" class="btn-send">Змінити</button>
        </form>
    </div>
<?php endforeach; ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<footer>
    <ul class="footer-menu">
        <li class="menu-item">© 2022. All you need. Food delivery</li>
    </ul>
</footer>

</body>

</html>