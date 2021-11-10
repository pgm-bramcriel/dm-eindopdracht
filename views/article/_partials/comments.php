<h2>Comments:</h2>
<?php
global $detail_comments;
global $current_user;

if ($detail_comments) {
    foreach ($detail_comments as $comment) {
        ?>
            <div class="comment">
                <p><span><?=$comment['username']?></span></p>
                <p><?=$comment['content']?></p>

                <?php
                if ($comment['user_id'] === $current_user->user_id) {
                    ?>
                    <form method="POST">
                        <button name="comment_id" value=<?=$comment['comment_id']?>>Delete</button>
                    </form>
                    <?php
                }
                ?>
            </div>
        <?php
    };
} else {
    ?>
        <p class="no-comment">No comments yet...</p>
    <?php
}

?>