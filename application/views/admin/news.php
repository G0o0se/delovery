<div class="cont-menu">
    <ul class="menu-shop">
        <li>
            <a class="item-shop" href="./category">Категорії</a>
        </li>
        <li>
            <a class="item-shop" href="./goods">Страви</a>
        </li>
        <li>
            <a class="item-shop-active" href="./news">Новини</a>
        </li>
    </ul>
</div>
<div class="admin">
    <div class="admin-change">
        <div class="search-menu">
            <form class="goods-search" name="f1" method="post" action="news">
                <input type="search" name="search_q"/>
                <input class="search-admin" type="submit" value="ПОШУК" name="search"/>
            </form>
        </div>
    </div>
    <table class="goods">
        <thead>
        <tr>
            <th>Назва</th>
            <th>Опис</th>
            <th>Фото</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <form enctype="multipart/form-data" action="news" method="post">
                <td><input name="name" class="input-form" placeholder="Введіть назву новини" required type="text"/></td>
                <td><input name="description" class="input-form" placeholder="Введіть текст новини" required type="text"/></td>
                <input type="hidden" name="MAX_FILE_SIZE" value="30000000"/>
                <td><input name="image" class="input-form" required type="file" multiple accept="image/jpeg,image/png"/></td>
                <td></td>
                <td></td>
                <td><button style="width: 150px; margin-bottom: 10px;" name="add" type="submit" class="btn-send">Додати</button></td>
            </form>
        </tr>
        </tbody>
        <?php foreach ($news as $news) : ?>
            <tr>
                <?php $id = $news->getId(); ?>
                <td><?= $news->getName() ?></td>
                <td><?= $news->getDescription() ?></td>
                <td><img height="150px" src="/public/img/<?= $news->getImage() ?>" alt=""></td>
                <td></td>
                <td>
                    <form action="/admin/news/update" method='post'>
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
<script src="../public/js/main.js" type="text/javascript"></script>

<footer>
    <ul class="footer-menu">
        <li class="menu-item">© 2022. All you need. Food delivery</li>
    </ul>
</footer>

</body>

</html>