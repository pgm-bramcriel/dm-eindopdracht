<?php

class Brands extends BaseModel {

    protected $table = 'brands';
    protected $pk = 'brand_id';

    protected function postBrand (string $name) {
        global $db;

        $sql = "INSERT INTO `brands` (`name`) VALUES ('$name')";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $db->lastInsertId();
    }

    protected function deleteBrand (int $brand_id) {
        global $db;

        $sql = "DELETE FROM `brands` WHERE `brands`.`brand_id` = $brand_id";
        
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $db->lastInsertId();
    }

    protected function updateBrand (string $newBrandName, int $brand_id) {
        global $db;

        $sql = "UPDATE `brands` SET `name` = '$newBrandName' WHERE `brands` . `brand_id` = '$brand_id'";
         
        $stmnt = $db->prepare($sql);
        $stmnt->execute();

        return $db->lastInsertId();
    }
}