<div class="home">
    <div class="home__top">
        <a class="post-link" href="#post">Post an item</a>
        <div class="brands">
            <?php
                global $brands;
                foreach ($brands as $brand) {
                    ?>
                        <form method="POST">
                            <button name="brand_id" value="<?=$brand["brand_id"]?>" type="submit"><?=$brand["name"]?></button>
                        </form>
                    <?php
                };
            ?>
        </div>
    </div>

    <div class="home__articles">
<?php
global $current_user;
global $articles;

$i = 300;
foreach ($articles as $article) {
    $i++;
    ?>
    <a class="home_item" href="<?php BASE_URL;?>/article/detail/<?=$article["article_id"]?>">
        <article>
            <div class="img_container">
                <img src="https://picsum.photos/200/<?=$i?>">
            </div>
            <h3 class="home_item__title"><?=$article["name"]?></h3>
            <?php if ($article["description"]) {
            ?>
            <p class="home_item__description"><?=$article["description"]?></p>
            <?php
            }?>
            <p class="home_item__price">€<?=$article["price"]?></p>
        </article>
    </a>
    <?php
};
?>
</div>
<?php
if ($current_user) {
    include BASE_DIR . '/views/home/_partials/post_article.php';
};
?>
</div>