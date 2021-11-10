<?php

class Users extends BaseModel {

    protected $table = 'users';
    protected $pk = 'user_id';

    protected function getUserByUsername(string $username, string $password) {
        global $db;

        $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";

        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }

    protected function postUser(string $username, string $password, string $email, int $number, string $location) {
        global $db;
        $sql = "INSERT INTO `users` (`username`, `number`, `location`, `email`, `password`) VALUES ('$username', '$number', '$location', '$email', '$password');";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }

    protected function updateUser(string $username, string $password, string $email, int $number, string $location) {
        global $db;
        global $current_user;

        $sql = "UPDATE `users` SET `username` = '$username', `number` = '$number', `location` = '$location', `email` = '$email', `password` = '$password' WHERE `users`.`user_id` = $current_user->user_id";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }

    protected function deleteUser(int $uid) {
        global $db;

        $sql = "DELETE FROM `users` WHERE `users`.`user_id` = $uid  ";

        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }
}