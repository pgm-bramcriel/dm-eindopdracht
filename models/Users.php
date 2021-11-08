<?php

class Users extends BaseModel {

    protected $table = 'users';
    protected $pk = 'user_id';

    protected function getUserByUsername(string $username) {
        global $db;

        $sql = 'SELECT * FROM `' . $this->table . '` WHERE `' . 'username' . '` = :username';

        $stmnt = $db->prepare($sql);
        $stmnt->execute( [ ':username' => $username ] );

        return $stmnt->fetchObject();
    }

    protected function postUser(string $username, string $password, string $email, int $number, string $location) {
        global $db;
        $sql = "INSERT INTO `users` (`username`, `number`, `location`, `e-mail`, `password`) VALUES ('$username', '$number', '$location', '$email', '$password');";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }
}