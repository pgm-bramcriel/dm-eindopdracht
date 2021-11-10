<div class="footer__inner">
    <a href="/">home</a>
        <?php
            if(!$current_user) {
                ?>
                    <a href="/login">login</a>
                    <a href="/register">register</a>
                <?php
            } else {
                ?>
                    <a href="/profile">profile</a>
                    <a href="/logout">logout</a>
                <?php
            }
        ?>
</div>