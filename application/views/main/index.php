<div class="main-bcgr"></div>

    <div class="page">
        <div class="name-content">
            <h1 id="category">Категорії</h1>
        </div>
    </div>

    <div class="menu-main-item">
        <?php foreach ($category as $categories) : ?>
            <a href="rest/<?=$categories->getUrl();?>">
                <div class="food-main-item">
                    <img alt="" class="img-item" src="../public/img/categories/<?= $categories->getImage() ?>">
                    <div class="item-main-info">
                        <div class="name-item">
                            <h2><?= $categories->getName() ?></h2>
                        </div>
                        <div class="btn-delivery">
                            <button class="btn-timedelivery2"> <?= $categories->getCookTime() ?> <br> хв</button>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>

    <div class="container-news" id="news">
        <div class="news">
            <h2>новини</h2>
            <div class="all-news-item">
                <?php foreach (array_slice(array_reverse($news), 0, 3) as $lastnews) : ?>
                    <div class="news-item">
                        <div class="img-news">
                            <img alt="salmon" src="/public/img/news/<?= $lastnews->getImage() ?>">
                        </div>
                        <div class="info-news">
                            <div class="time-news">
                                <?= $lastnews->getDate() ?></div>
                            <div class="name-news">
                                <h3><?= $lastnews->getName() ?></h3>
                            </div>
                            <div class="text-news">
                                <p><?= $lastnews->getDescription() ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>