<?php
    global $article;
?>

<div class="detail">
    <div class="detail-info">
        <div class="detail-info__img">
            <img src="https://picsum.photos/800/900">
        </div>
        <div class="detail-info__info">
            <h2><?=$article->name?></h2>
            <p class="price">€<?=$article->price?></p>
            <p><?=$article->description?></p>

            <?php
                if ($article->color) {
                    ?>
                    <div class="detail__extra-info">
                        <span >Color: <?=$article->color?></span>
                    </div>
                    <?php
                }
            ?>

            <?php
                if ($article->condition) {
                    ?>
                    <div class="detail__extra-info">
                        <span >Condition: <?=$article->condition?></span>
                    </div>
                    <?php
                }
            ?>

            <?php
                if ($article->weight) {
                    ?>
                    <div class="detail__extra-info">
                        <span >Weight: <?=$article->weight?>kg</span>
                    </div>
                    <?php
                }
            ?>

            <p class="detail__brand">Brand: <?=$article->brand_name?></p>
            <p class="detail__type">Type: <?=$article->type_name?></p>

            <div class="detail__poster-info">
                <?php
                if($article->username) {
                    ?>
                    <p><span>Poster:</span> <?=$article->username?></p>
                    <p><span>Contact number: </span><?=$article->number?></p>
                    <p><span>Contact e-mail: </span><?=$article->email?></p>
                    <?php
                } else {
                    ?>
                    <p>Deleted user</p>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>

    <?php
        global $current_user;
        
        include BASE_DIR . '/views/article/_partials/comments.php';
        if ($current_user) {
            include BASE_DIR . '/views/article/_partials/post_comments.php';
        }
    ?>
</div>