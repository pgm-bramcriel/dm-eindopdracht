<?php

class HomeController extends BaseController {
    private $name;
    private $description;
    private $price;
    private $brand;
    private $type;
    private $condition;
    private $weight;
    private $color;
    private $image;
    private $brand_id;

    protected function index () {
        global $brands;
        global $articles;
        global $types;

        $allArticles = Article::getAll();
        $allBrands = Brands::getAll();
        $allTypes = Types::getAll(); 

        $brands = $allBrands;
        $articles = $allArticles;
        $types = $allTypes;

        if(isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['image']) && isset($_POST['brand']) && isset($_POST['type'])) {
            $this->name = $_POST['name'];
            $this->description = $_POST['description'];
            $this->price = $_POST['price'];
            $this->image = $_POST['image'];
            $this->brand = $_POST['brand'];
            $this->type = $_POST['type'];
            $this->color = $_POST['color'];
            $this->condition = $_POST['condition'];
            $this->weight = $_POST['weight'];
            
            $newArticle = Media::postMedia($this->name, $this->description, $this->price, $this->condition, $this->weight, $this->color, $this->image, $this->brand, $this->type);

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