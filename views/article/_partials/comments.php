<h3>Comments:</h3>
<?php
global $detail_comments;

if ($detail_comments) {
    foreach ($detail_comments as $comment) {
        ?>
            <div class="comment">
                <span>User: <?=$comment['username']?></p>
                <p><?=$comment['content']?></p>
            </div>
        <?php
    };
} else {
    ?>
        <p>No comments yet...</p>
    <?php
}

?>