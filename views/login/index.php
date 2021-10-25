<?php
    global $db;

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        if ($username != '' && $password != '') {
          $sql = "SELECT * FROM `users` where `username` = '$username' AND `password` = '$password'";
          $stmnt = $db->prepare($sql);
          $stmnt->execute();
          $data = $stmnt->fetch();
          if ($password == $data[7]) {
            echo "Welcome";
          } else {
            echo "User not registered";
          }
          print_r($data);
        }
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="username..." required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="*******" required>
        </div>
        <button type="submit" name="login">Log in</button>
    </form>
</body>
</html>