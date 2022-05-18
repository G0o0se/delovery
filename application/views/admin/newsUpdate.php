<div class="cont-menu">
    <ul class="menu-shop">
        <li>
            <a class="item-shop" href="/admin/category">Категорії</a>
        </li>
        <li>
            <a class="item-shop" href="/admin/goods">Страви</a>
        </li>
        <li>
            <a class="item-shop-active" href="/admin/news">Новини</a>
        </li>
    </ul>
</div>
<div class="update">
    <?php foreach ($news as $news) : ?>
        <div class="update-class">
            <form enctype="multipart/form-data" method='post'>
                <input type="hidden" class="input-form" name='id' value='<?= $news->getId(); ?>'/> <br>
                <b>Назва</b>: <input class="input-form" name='name' value='<?= $news->getName() ?>'/> <br>
                <b>Опис</b>: <input class="input-form" name='description' value='<?= $news->getDescription() ?>'/> <br>
                <input type="hidden" name="MAX_FILE_SIZE" value="30000000"/>
                <b>Фото</b>: <input name="image" class="input-form" type="file" multiple accept="image/jpeg,image/png"/> <br>
                <input class="input-form" type="hidden" name='imagedefault' value='<?= $news->getImage() ?>'/>
                <br>
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