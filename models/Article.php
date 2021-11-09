<?php

class Article extends BaseModel {

    protected $table = 'articles';
    protected $pk = 'article_id';

    protected function postArticle (string $name, string $description, string $price) {
        global $db;
        global $current_user;

        $user_id = $current_user->user_id;
        $sql = "INSERT INTO `articles` (`name`, `description`, `price`, `user_id`, `type_id`, `brand_id`) VALUES ('$name', '$description', '$price', '$user_id', '1', '1');";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }

    protected function getArticleByUserId (int $user_id) {
        global $db;
        $sql = "SELECT * FROM `articles` WHERE `user_id` = '$user_id'";

        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchAll();
    }
}