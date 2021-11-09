<h3>Comments:</h3>
<?php
global $detail_comments;

if ($detail_comments) {
    foreach ($detail_comments as $comment) {
        ?>
            <p><?=$comment['content']?></p>
        <?php
    };
} else {
    ?>
        <p>No comments yet...</p>
    <?php
}

?>