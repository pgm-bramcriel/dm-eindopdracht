<h2 id="comment">Comments:</h2>
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
                    <div class="comment__buttons">
                        <form method="POST">
                            <button class="button-delete" name="comment_id" value=<?=$comment['comment_id']?>>Delete</button>
                        </form>
                        
                        <div>
                            <button class="update-comments-button">Update</button>
                        </div>
                    </div>

                    <form class="update-comments" method="POST">
                        <label for="updated_content">Update comment:</label>
                        <textarea name="updated_content" placeholder="New content..."></textarea>

                        <button name="new_comment_id" value=<?=$comment['comment_id']?> class="btn-primary" type="submit">Update comment!</button>
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