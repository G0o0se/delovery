<div class="main-bcgr"></div>

<div class="page">
    <div class="search-rest" id="main-d2">
        <div class="search-btns">
            <div class="search-menu">
                    <input placeholder="Enter the type of food..." type="text"/>
                    <button class="btn-search">search</button>
            </div>
           <div class="btn-media">
                <div class="btn-container" id="main-btn">
                    <div class="btn-rest">
                        <button class="btn-time" id="main-time">delivery time</button>
                    </div>
                    <div class="btn-rest">
                        <button class="btn-filters" id="main-filters">filters</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="name-content">
        <h1>Categories</h1>
    </div>

    </div>
    <div class="menu-main-item">
        <?php foreach ($category as $categories) : ?>
            <a href="rest/<?=$categories->getUrl();?>">
                <div class="food-main-item">
                    <img alt="steak" class="img-item" src="<?= $categories->getImage() ?>">
                    <div class="item-main-info">
                        <div class="name-item">
                            <h2><?= $categories->getName() ?></h2>
                            <p><?= $categories->getCountry() ?></p>
                        </div>
                        <div class="btn-delivery">
                            <button class="btn-timedelivery2"> <?= $categories->getCookTime() ?> min</button>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>

    <div class="container-news">
        <div class="news">
            <h2>our recent news</h2>
            <div class="all-news-item">
                <div class="news-item">
                    <div class="img-news">
                        <img alt="salmon" src="/public/img/salmon.jpg">
                    </div>
                    <div class="info-news">
                        <div class="time-news">
                            5/03/2021</div>
                        <div class="name-news">
                            <h3><a>lorem ipsum dolor sit amet</a></h3>
                        </div>
                        <div class="text-news">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet feugiat sem.
                                Aliquam erat volutpat. Etiam luctus, leo at convallis faucibus, nibh diam placerat enim,
                                nec ultricies lectus nunc id nislDonec lorem justo, fermentum at mattis fermentum,
                                tempus eu ligula. Sed vitae felis a justo consectetur vulputate.</p>
                        </div>
                    </div>
                </div>
                <div class="news-item">
                    <div class="img-news">
                        <img alt="salmon" src="/public/img/salmon.jpg">
                    </div>
                    <div class="info-news">
                        <div class="time-news">
                            5/03/2021</div>
                        <div class="name-news">
                            <h3><a>lorem ipsum dolor sit amet</a></h3></div>
                        <div class="text-news">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet feugiat sem.
                                Aliquam erat volutpat. Etiam luctus, leo at convallis faucibus, nibh diam placerat enim,
                                nec ultricies lectus nunc id nislDonec lorem justo, fermentum at mattis fermentum,
                                tempus eu ligula. Sed vitae felis a justo consectetur vulputate.</p>
                        </div>
                    </div>
                </div>
                <div class="news-item">
                    <div class="img-news">
                        <img alt="salmon" src="/public/img/salmon.jpg">
                    </div>
                    <div class="info-news">
                        <div class="time-news">
                            5/03/2021</div>
                        <div class="name-news">
                            <h3><a>lorem ipsum dolor sit amet</a></h3></div>
                        <div class="text-news">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet feugiat sem.
                                Aliquam erat volutpat. Etiam luctus, leo at convallis faucibus, nibh diam placerat enim,
                                nec ultricies lectus nunc id nislDonec lorem justo, fermentum at mattis fermentum,
                                tempus eu ligula. Sed vitae felis a justo consectetur vulputate.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-readmore">
                <button class="btn-more">read more</button>
            </div>
        </div>
    </div>
</div>