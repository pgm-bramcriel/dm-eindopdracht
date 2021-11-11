<?php

class Media extends BaseModel {

    protected $table = 'media';
    protected $pk = 'media_id';

    protected function postMedia ($name, $description, $price, $image, $brand_id) {
        global $db;

        $article_id = Article::postArticle($name, $description, $price, $brand_id);

        $sql = "INSERT INTO `media` (`url`, `article_id`) VALUES ('$image', '$article_id')";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }
}