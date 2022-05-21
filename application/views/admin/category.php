<div class="cont-menu">
    <ul class="menu-shop">
        <li>
            <a class="item-shop-active" href="./category">Категорії</a>
        </li>
        <li>
            <a class="item-shop" href="./goods">Страви</a>
        </li>
        <li>
            <a class="item-shop" href="./order">Замовлення</a>
        </li>
        <li>
            <a class="item-shop" href="./news">Новини</a>
        </li>
    </ul>
</div>
<div class="admin">
    <div class="admin-change">
        <div class="search-menu">
            <form class="goods-search" name="f1" method="post" action="category">
                <input type="search" name="search_q"/>
                <input class="search-admin" type="submit" value="ПОШУК" name="search"/>
            </form>
        </div>
    </div>

    <table class="goods">
        <thead>
        <tr>
            <th>Назва</th>
            <th>Фото</th>
            <th>Час приготування (хвилини)</th>
            <th>URL</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <form enctype="multipart/form-data" action="category" method="post">
                <td><input name="name" class="input-form" placeholder="Введіть назву категорії" required type="text"/></td>
                <input type="hidden" name="MAX_FILE_SIZE" value="30000000"/>
                <td><input name="image" class="input-form" required type="file" multiple accept="image/jpeg,image/png"/></td>
                <td><input name="cookTime" class="input-form" type="number" placeholder="0" required min="20" value="20" step="5" title="Currency" pattern="^\d+(?:\.\d{1,2})?$"/></td>
                <td><input name="url" class="input-form" placeholder="URL" required type="text"/></td>
                <td></td>
                <td></td>
                <td><button style="width: 150px; margin-bottom: 10px;" name="add" type="submit" class="btn-send">Додати</button></td>
            </form>
        </tr>
            <?php foreach ($category as $category) : ?>
                <tr>
                    <?php $id = $category->getId(); ?>
                    <td><?= $category->getName() ?></td>
                    <td><img alt="" width="200px" src="/public/img/<?= $category->getImage() ?>"></td>
                    <td><?= $category->getCookTime() ?></td>
                    <td><?= $category->getUrl() ?></td>
                    <td></td>
                    <td>
                        <form action="/admin/category/update" method='post'>
                            <input type='hidden' name='edit' value='<?= $id ?>'/>
                            <input style="background: green; width: 150px" type="submit" class="btn-send" value="Змінити">
                        </form>
                    </td>

                    <td>
                        <form method='post'>
                            <input type='hidden' name='id' value='<?= $id ?>'/>
                            <input style="background: darkred; width: 150px" type="submit" class="btn-send" value="Видалити">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<footer>
    <ul class="footer-menu">
        <li class="menu-item">© 2022. All you need. Food delivery</li>
    </ul>
</footer>

</body>

</html>
