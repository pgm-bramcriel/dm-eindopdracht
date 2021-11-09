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
}