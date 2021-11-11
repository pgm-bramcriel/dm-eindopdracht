<?php

class Media extends BaseModel {

    protected $table = 'media';
    protected $pk = 'media_id';

    protected function postMedia (string $image, $article_id) {
        global $db;

        $sql = "INSERT INTO `media` (`url`, `article_id`) VALUES ('$image', '$article_id')";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }
}