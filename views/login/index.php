<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <form method="POST">
        <div class="form__item">
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="username..." required>
        </div>

        <div class="form__item">
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="*******" required>
        </div>
        <button class="btn-primary" type="submit">Log in</button>
    </form>
</body>
</html>