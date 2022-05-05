<div class="update">
<?php foreach ($good as $goods) : ?>
    <div class="update-class">
        <form method='post'>
            <input type="hidden" class="input-form" name='id' value='<?= $goods->getId(); ?>'/> <br>
            <b>Name</b>: <input class="input-form" name='name' value='<?= $goods->getName() ?>'/> <br>
            <b>Price</b>: <input class="input-form" name='price' type="number" placeholder="0" required name="price" min="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" value='<?= $goods->getPrice() ?>'/> <br>
            <b>Description</b>: <input class="input-form" name='description' value='<?= $goods->getDescription() ?> '/> <br>
            <b>Category</b>: <input class="input-form" name='category' value='<?= $goods->getCategory() ?>'/>  <br>
            <b>Image</b>: <input class="input-form" name='image' value='<?= $goods->getImage() ?>'/><br><br>
            <button name="editing" type="submit" class="btn-send">Edit</button>
        </form>
    </div>
<?php endforeach; ?>
</div>
