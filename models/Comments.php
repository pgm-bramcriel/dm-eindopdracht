<?php

class Comments extends BaseModel {
    protected $table = 'comments';
    protected $pk = 'comment_id';

    protected function getCommentsByArticleId(int $article_id) {
        global $db;

        $sql = "SELECT * FROM `comments` WHERE `article_id` = $article_id";
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchAll();
    }
}