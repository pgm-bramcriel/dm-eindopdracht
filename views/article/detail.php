<div class="detail">
    <div class="detail-info">
        <div class="detail-info__img">
            <img src="https://picsum.photos/800/900">
        </div>
        <div class="detail-info__info">
            <h2><?=$article->name?></h2>
            <p class="price">€<?=$article->price?></p>
            <p><?=$article->description?></p>
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