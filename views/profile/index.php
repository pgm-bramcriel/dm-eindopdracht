<?php
    global $current_user;
    global $profile_articles;
?>
<div class="profile-info">
    <h2><?=$current_user->username?>'s profile</h2>
    <p><span>Username:</span> <?=$current_user->username?></p>
    <p><span>Email:</span> <?=$current_user->email?></p>
    <p><span>Number:</span> <?=$current_user->number?></p>
    <p><span>location:</span> <?=$current_user->location?></p>
    <p><span>Created at:</span> <?=$current_user->created_at?></p>
</div>

<?php
include BASE_DIR . '/views/profile/_partials/update_profile.php';
?>

<h2>Your articles:</h2>
<div class="profile__articles">
<?php
    $i = 300;
    foreach ($profile_articles as $profile_article) {
        $i++;
        ?>
        <a class="profile_item" href="<?php BASE_URL;?>/article/detail/<?=$profile_article["article_id"]?>">
            <article>
                <img src="https://picsum.photos/200/<?=$i?>">
                <h3 class="home_item__title"><?=$profile_article["name"]?></h3>
                <?php if ($profile_article["description"]) {
                ?>
                <p class="home_item__description"><?=$profile_article["description"]?></p>
                <?php
                }?>
                <p class="home_item__price">€<?=$profile_article["price"]?></p>
            </article>
        </a>
        <?php
    };
?>
</div>