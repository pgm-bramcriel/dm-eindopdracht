<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL;?>/styling/main.css">
    <title>document</title>
</head>
<body>
    <header>
        <div class="wrapper">
            <nav>
                <?php
                    include BASE_DIR . '/views/_templates/_partials/nav.php'
                ?>
            </nav>
        </div>
    </header>
    <main class="wrapper">
        <?= $content; ?>
    </main>
    <footer>
        <div class="wrapper">
            <?php
                include BASE_DIR . '/views/_templates/_partials/footer.php'
            ?>
        </div>
    </footer>

    <script src="../js/profile.js"></script>
</body>
</html>