<?php

class Article extends BaseModel {

    protected $table = 'articles';
    protected $pk = 'article_id';

    protected function postArticle (string $name, string $description, int $price, int $brand_id, int $type_id) {
        global $db;
        global $current_user;

        $user_id = $current_user->user_id;
        $sql = "INSERT INTO `articles` (`name`, `description`, `price`, `user_id`, `type_id`, `brand_id`) VALUES ('$name', '$description', '$price', '$user_id', '$type_id', '$brand_id');";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $db->lastInsertId();
    }

    protected function getArticleByUserId (int $user_id) {
        global $db;
        $sql = "SELECT * FROM `articles` WHERE `user_id` = '$user_id'";

        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchAll();
    }

    protected function getArticlesByBrandId (int $brand_id) {
        global $db;
        $sql = "SELECT * FROM `articles` WHERE `brand_id` = '$brand_id'";

        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchAll();
    }

    protected function getArticleById( int $id ) {
        global $db;

        $sql = "SELECT * FROM `articles` INNER JOIN `brands` ON `articles`.`brand_id` = `brands`.`brand_id` INNER JOIN `types` ON `articles`.`type_id` = `types`.`type_id` INNER JOIN `users` ON `articles`.`user_id` = `users`.`user_id` WHERE `article_id` = '$id'";

        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute();

        return $pdo_statement->fetchObject();
    }
}