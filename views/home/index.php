<div class="home">
    <div class="home__articles">
<?php
global $current_user;

foreach ($articles as $article) {
    ?>
    <a class="home_item" href="<?php BASE_URL;?>/article/detail/<?=$article["article_id"]?>">
        <article>
            <h2><?=$article["name"]?></h2>
            <?php if ($article["description"]) {
            ?>
            <h2><?=$article["description"]?></h2>
            <?php
            }?>
            <h2>€<?=$article["price"]?></h2>
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