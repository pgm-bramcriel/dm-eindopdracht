<?php

class Comments extends BaseModel {
    protected $table = 'comments';
    protected $pk = 'comment_id';

    protected function getCommentsByArticleId(int $article_id) {
        global $db;

        $sql = "SELECT * FROM `comments` INNER JOIN `users` ON `comments`.`user_id` = `users`.`user_id` WHERE `article_id` = $article_id";
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchAll();
    }

    protected function postComment(string $content, int $article_id) {
        global $db;
        global $current_user;

        $sql = "INSERT INTO `comments` (`content`, `user_id`, `article_id`) VALUES ('$content', '$current_user->user_id', '$article_id');";
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }

    protected function deleteComment(string $comment_id) {
        global $db;
        global $current_user;

        $sql = "DELETE FROM `comments` WHERE `comments`.`comment_id` = $comment_id";
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }
}