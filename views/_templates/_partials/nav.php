<a href="/">Home</a>

<?php
    if(!$current_user) {
        ?>
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        <?php
    } else {
        ?>
            <a href="/profile">Profile</a>
            <a href="/logout">Logout</a>
        <?php
    }
    ?>
    <a href="/admin">Admin</a>