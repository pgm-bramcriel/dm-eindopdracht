<?php

class AdminController extends BaseController {
    private $uid;
    private $brand_name;
    private $brand_id;
    private $brand_update_name;
    private $brand_update_id;

    protected function index () {
        global $users;
        global $brands;
        global $adminArticles;

        $allUsers = Users::getAll();
        $allBrands = Brands::getAll();
        $allAdminArticles = Article::getAll();

        $users = $allUsers;
        $brands = $allBrands;
        $adminArticles = $allAdminArticles;
        

        if(isset($_POST['uid'])) {
            $this->uid = $_POST['uid'];

            $deletedUser = Users::deleteUser($this->uid);

            $this->redirect('/admin');
        }

        if(isset($_POST['brand_name'])) {
            $this->brand_name = $_POST['brand_name'];

            $brand = Brands::postBrand($this->brand_name);

            $this->redirect('/admin');
        }

        if(isset($_POST['brand_id'])) {
            $this->brand_id = $_POST['brand_id'];

            $deletedBrand = Brands::deleteBrand($this->brand_id);

            $this->redirect('/admin');
        }

        if(isset($_POST['brand_update_name']) && isset($_POST['brand_update_id'])) {
            $this->brand_update_name = $_POST['brand_update_name'];
            $this->brand_update_id = $_POST['brand_update_id'];

            $updatedBrand = Brands::updateBrand($this->brand_update_name, $this->brand_update_id);

            $this->redirect('/admin');
        }

        $this->loadView();
    }
}