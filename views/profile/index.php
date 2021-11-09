<?php
    global $current_user;
    global $profile_articles;
?>
<h1><?=$current_user->username?>'s profile</h1>
<p>Username: <?=$current_user->username?></p>
<p>Email: <?=$current_user->email?></p>
<p>Number: <?=$current_user->number?></p>
<p>location: <?=$current_user->location?></p>
<p>created at: <?=$current_user->created_at?></p>

<h3>Your articles:</h3>
<div class="profile__articles">
<?php
    foreach ($profile_articles as $profile_article) {
        ?>
        <a class="profile_item" href="<?php BASE_URL;?>/article/detail/<?=$profile_article["article_id"]?>">
            <article>
                <h2><?=$profile_article["name"]?></h2>
                <?php if ($profile_article["description"]) {
                ?>
                <h2><?=$profile_article["description"]?></h2>
                <?php
                }?>
                <h2>€<?=$profile_article["price"]?></h2>
            </article>
        </a>
        <?php
    };
?>
</div>