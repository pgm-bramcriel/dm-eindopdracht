<?php
global $db;

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $location = $_POST['location'];

    if($password == $confirmPassword) {
        $sql = "INSERT INTO `users` (`username`, `number`, `location`, `e-mail`, `password`) VALUES ('$username', '$number', '$location', '$email', '$password');";
        $stmnt = $db->prepare($sql);
        $stmnt->execute();
    } else {
        echo 'Passwords do not match';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>

    <form method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="username" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="*******" required>
        </div>

        <div>
            <label for="confirmpassword">Confirm password:</label>
            <input type="password" name="confirmpassword" placeholder="*******" required>
        </div>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="email" required>
        </div>

        <div>
            <label for="number">Phone number:</label>
            <input type="number" name="number" placeholder="number" required>
        </div>

        <div>
            <label for="location">Location:</label>
            <input type="text" name="location" placeholder="location" required>
        </div>

        <button class="btn-primary" type="submit" name="register">Register</button>
    </form>
    <p>Already have an account?</p>
    <a href="/login">Sign in</a>
</body>
</html>