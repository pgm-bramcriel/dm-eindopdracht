<div class="home">
<?php
foreach ($articles as $article) {
    ?>
    <a class="home_item"href="">
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