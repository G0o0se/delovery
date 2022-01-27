<div class="admin">
    <div class="admin-change">
        <div class="search-menu">
            <form class="goods-search" name="f1" method="post" action="goods">
                <input type="search" name="search_q"/>
                <input class="search-admin" type="submit" value="SEARCH" name="search"/>
            </form>
        </div>
    </div>
    <table class="goods">
        <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Category</th>
            <th>Image</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <form action="goods" method="post">
                <td><input name="name" class="input-form" placeholder="Enter name good" type="text"/></td>
                <td><input name="price" class="input-form" placeholder="Enter price good" type="number" placeholder="0" required name="price" min="0" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$"/></td>
                <td><input name="description" class="input-form" placeholder="Enter description good" type="text"/></td>
                <td><input name="category" class="input-form" placeholder="Enter category" type="text"/></td>
                <td><input name="image" class="input-form" placeholder="Enter url image" type="text"/></td>
                <td><button style="width: 100px;" name="add" type="submit" class="btn-send">add</button></td>
            </form>
        </tr>
        <?php foreach ($good as $goods) : ?>
            <tr>
                <?php $id = $goods->getId(); ?>
                <td><?= $goods->getName() ?></td>
                <td><?= $goods->getPrice() ?> €</td>
                <td><?= $goods->getDescription() ?></td>
                <td><?= $goods->getCategory() ?></td>
                <td>
                    <form action="/admin/goods/update" method='post'>
                        <input type='hidden' name='edit' value='<?= $id ?>'/>
                        <input style="background: green; width: 100px" type="submit" class="btn-send" value="edit">
                    </form>
                </td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='id' value='<?= $id ?>'/>
                        <input style="background: darkred; width: 100px" type="submit" class="btn-send" value="delete">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>