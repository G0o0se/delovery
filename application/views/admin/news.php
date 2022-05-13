<div class="cont-menu">
    <ul class="menu-shop">
        <li>
            <a class="item-shop" href="./category">Категорії</a>
        </li>
        <li>
            <a class="item-shop" href="./goods">Страви</a>
        </li>
        <li>
            <a class="item-shop" href="./news">Новини</a>
        </li>
    </ul>
</div>
<div class="admin">
    <div class="admin-change">
        <div class="search-menu">
            <form class="goods-search" name="f1" method="post" action="goods">
                <input type="search" name="search_q"/>
                <input class="search-admin" type="submit" value="ПОШУК" name="search"/>
            </form>
        </div>
    </div>
    <table class="goods">
        <thead>
        <tr>
            <th>Назва</th>
            <th>Ціна</th>
            <th>Опис</th>
            <th>Категорія</th>
            <th>Фото</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <form action="goods" method="post">
                <td><input name="name" class="input-form" placeholder="Введіть назву товару" type="text"/></td>
                <td><input name="price" class="input-form" type="number" placeholder="0" required min="0" value="0" step="5" title="Currency" pattern="^\d+(?:\.\d{1,2})?$"/></td>
                <td><input name="description" class="input-form" placeholder="Введіть опис товару" type="text"/></td>
                <td><input name="category" class="input-form" placeholder="Введіть ім'я категорії" type="text"/></td>
                <td><input name="image" class="input-form" placeholder="Додайте фото" type="text"/></td>
                <td></td>
                <td></td>
                <td><button style="width: 150px;" name="add" type="submit" class="btn-send">Додати</button></td>
            </form>
        </tr>
        </tbody>
        <?php foreach ($goods as $goods) : ?>
            <tr>
                <?php $id = $goods->getId(); ?>
                <td><?= $goods->getName() ?></td>
                <td><?= $goods->getPrice() ?>₴</td>
                <td><?= $goods->getDescription() ?></td>
                <td><?= $goods->getCategory() ?></td>
                <td><?= $goods->getImage() ?></td>
                <td></td>
                <td>
                    <form action="/admin/goods/update" method='post'>
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