<h1>Index pagina van de articles</h1>
<?php


print_r( $articles );

foreach ($articles as $article) {
    ?>
    <h2><?=$article["name"]?></h2>
    <?php if ($article["description"]) {
    ?>
    <h2><?=$article["description"]?></h2>
    <?php
    }?>
    <h2>€<?=$article["price"]?></h2>
    <?php
};