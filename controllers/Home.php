<?php

class HomeController extends BaseController {
    private $name;
    private $description;
    private $price;
    private $brand;
    private $image;
    private $brand_id;

    protected function index () {
        global $brands;
        global $articles;

        $allArticles = Article::getAll();
        $allBrands = Brands::getAll();

        $brands = $allBrands;
        $articles = $allArticles;

        if(isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['image']) && isset($_POST['brand'])) {
            $this->name = $_POST['name'];
            $this->description = $_POST['description'];
            $this->price = $_POST['price'];
            $this->image = $_POST['image'];
            $this->brand = $_POST['brand'];
            
            $newArticle = Media::postMedia($this->name, $this->description, $this->price, $this->image, $this->brand);

            $this->redirect('home#post');
        }

        if(isset($_POST['brand_id'])) {
            $this->brand_id = $_POST['brand_id'];

            $filteredArticles = Article::getArticlesByBrandId($this->brand_id);

            $articles = $filteredArticles;
        }
        $this->loadView();
    }
}