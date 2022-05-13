<div class="update">
<?php foreach ($goods as $goods) : ?>
    <div class="update-class">
        <form method='post'>
            <input type="hidden" class="input-form" name='id' value='<?= $goods->getId(); ?>'/> <br>
            <b>Назва</b>: <input class="input-form" name='name' value='<?= $goods->getName() ?>'/> <br>
            <b>Ціна</b>: <input class="input-form" name='price' type="number" placeholder="0" required min="0" step="5" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" value='<?= $goods->getPrice() ?>'/> <br>
            <b>Опис</b>: <input class="input-form" name='description' value='<?= $goods->getDescription() ?> '/> <br>
            <b>Категорія</b>: <input class="input-form" name='category' value='<?= $goods->getCategory() ?> '/> <br>
            <b>Зображення</b>: <input class="input-form" name='image' value='<?= $goods->getImage() ?>'/><br><br>
            <button name="editing" type="submit" class="btn-send">Змінити</button>
        </form>
    </div>
<?php endforeach; ?>
</div>
