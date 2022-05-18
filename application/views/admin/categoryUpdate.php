<div class="cont-menu">
    <ul class="menu-shop">
        <li>
            <a class="item-shop-active" href="/admin/category">Категорії</a>
        </li>
        <li>
            <a class="item-shop" href="/admin/goods">Страви</a>
        </li>
        <li>
            <a class="item-shop" href="/admin/news">Новини</a>
        </li>
    </ul>
</div>
<div class="update">
<?php foreach ($category as $category) : ?>
    <div class="update-class">
        <form enctype="multipart/form-data" method='post'>
            <input type="hidden" class="input-form" name='id' value='<?= $category->getId(); ?>'/> <br>
            <b>Назва</b>: <input class="input-form" name='name' value='<?= $category->getName() ?>'/> <br>
            <input type="hidden" name="MAX_FILE_SIZE" value="30000000"/>
            <b>Фото</b>: <input name="image" class="input-form" type="file" multiple accept="image/jpeg,image/png"/> <br>
            <input class="input-form" type="hidden" name='imagedefault' value='<?= $category->getImage() ?>'/>
            <b>Час приготування (хвилини)</b>: <input class="input-form" name='cookTime' type="number" placeholder="0" value='<?= $category->getCookTime() ?>' min="20"  step="5" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" /> <br>
            <b>URL</b>: <input class="input-form" name='url' value='<?= $category->getUrl() ?>'/> <br><br>
            <button name="editing" type="submit" class="btn-send">Змінити</button>
        </form>
    </div>
<?php endforeach; ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="../public/js/main.js" type="text/javascript"></script>

<footer>
    <ul class="footer-menu">
        <li class="menu-item">© 2022. All you need. Food delivery</li>
    </ul>
</footer>

</body>

</html>