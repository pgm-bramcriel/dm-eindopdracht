<?php

class Media extends BaseModel {

    protected $table = 'media';
    protected $pk = 'media_id';

    protected function postMedia ($name, $description, $price, $condition, $weight, $color, $image, $brand_id, $type_id) {
        global $db;

        $article_id = Article::postArticle($name, $description, $price, $condition, $weight, $color, $brand_id, $type_id);

        $sql = "INSERT INTO `media` (`url`, `article_id`) VALUES ('$image', '$article_id')";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $stmnt->fetchObject();
    }
}