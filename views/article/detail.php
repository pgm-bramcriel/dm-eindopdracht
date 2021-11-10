<h2><?=$article->name?></h2>
<p><?=$article->description?></p>
<p>€<?=$article->price?></p>

<?php
    global $current_user;
    
    include BASE_DIR . '/views/article/_partials/comments.php';
    if ($current_user) {
        include BASE_DIR . '/views/article/_partials/post_comments.php';
    }
?>