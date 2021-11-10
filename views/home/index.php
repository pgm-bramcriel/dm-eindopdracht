<div class="home">
    <a class="post-link" href="#post">Post an item</a>
    <div class="home__articles">
<?php
global $current_user;
$i = 300;
foreach ($articles as $article) {
    $i++;
    ?>
    <a class="home_item" href="<?php BASE_URL;?>/article/detail/<?=$article["article_id"]?>">
        <article>
            <img src="https://picsum.photos/200/<?=$i?>">
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