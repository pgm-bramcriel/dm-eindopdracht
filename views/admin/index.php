<?php
    global $users;
    global $brands;
    global $adminArticles;
?>

<h2 class="admin-title">Admin functionality</h2>

<div class="statistics">
    <p class="statistics-title">Statistics:</p>
    <p>Amount of users: <?=count($users)?></p>
    <p>Amount of articles: <?=count($adminArticles)?></p>
</div>

<button class="admin-user-button">Manage users</button>
<button class="admin-brand-button">Manage brands</button>

<div class="admin-user">
    <h2>Delete user:</h2>

    <form method="POST">
        <div class="form__item">
            <label for="uid">User id:</label>
            <input type="number" name="uid" placeholder="id" required>
        </div>

        <button class="btn-primary delete" type="submit">Delete</button>
    </form>

    <div>
        <h2 class="admin-user-title">Users</h2>
    <?php
        foreach ($users as $user) {
            ?>
                <div class="admin__users">
                    <p><span>username:</span> <?=$user["username"]?></p>
                    <p><span>id:</span> <?=$user["user_id"]?></p>
                </div>
            <?php
        };
        ?>
    </div>
</div>

<div class="brand-user">
    <h2>Add brand:</h2>

    <form method="POST">
        <div class="form__item">
            <label for="brand_name">Brand name:</label>
            <input type="text" name="brand_name" placeholder="Brand name..." required>
        </div>

        <button class="btn-primary" type="submit">Add brand</button>
    </form>

    <h2>Delete brand:</h2>

    <form method="POST">
        <div class="form__item">
            <label for="brand_id">Brand id:</label>
            <input type="number" name="brand_id" placeholder="id" required>
        </div>

        <button class="btn-primary" type="submit">Delete brand</button>
    </form>

    <h2>Update brand:</h2>

    <form method="POST">
        <div class="form__item">
            <label for="brand_update_id">Brand id:</label>
            <input type="number" name="brand_update_id" placeholder="id" required>

            <label for="brand_update_name">New brand name:</label>
            <input type="text" name="brand_update_name" placeholder="New name..." required>
        </div>

        <button class="btn-primary" type="submit">Update brand</button>
    </form>

    <div>
        <h2 class="admin-user-title">Brands</h2>
    <?php
        foreach ($brands as $brand) {
            ?>
                <div class="admin__brands">
                    <p><span>Brand name:</span> <?=$brand["brand_name"]?></p>
                    <p><span>Brand id:</span> <?=$brand["brand_id"]?></p>
                </div>
            <?php
        };
        ?>
    </div>
</div>