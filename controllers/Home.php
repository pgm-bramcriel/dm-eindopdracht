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

        $allArticles = Article::getAllArticles();
        $allBrands = Brands::getAll();
        $allTypes = Types::getAll(); 

        $brands = $allBrands;
        $articles = $allArticles;
        $types = $allTypes;

        if(isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) && isset($_FILES['image']) && isset($_POST['brand']) && isset($_POST['type']) && $_FILES['image']['size'] > 0) {
            $this->name = $_POST['name'];
            $this->description = $_POST['description'];
            $this->price = $_POST['price'];
            $this->image = $_FILES['image'];
            $this->brand = $_POST['brand'];
            $this->type = $_POST['type'];
            $this->color = $_POST['color'];
            $this->condition = $_POST['condition'];
            $this->weight = $_POST['weight'];

            $upload_dir = './media/';
            if ( !is_dir ($upload_dir)) {
                mkdir($upload_dir);
            }

            $tmp_location = $_FILES['image']['tmp_name'];
            $old_name = $_FILES['image']['name'];
            $file_type = $_FILES['image']['type'];
            $file_info = pathinfo($old_name);
            $extension = $file_info['extension'];

            if (in_array($file_type, ['image/png', 'image/jpeg', 'image/jpg'])) {
                $image = uniqid() . '.' . $file_info['extension'];
                $new_location = $upload_dir . $image;

                move_uploaded_file($tmp_location, $new_location);

                $newArticle = Media::postMedia($this->name, $this->description, $this->price, $this->condition, $this->weight, $this->color, $image, $this->brand, $this->type);

                $this->redirect('home#post');
            } else {
                print_r('Try again.');
            }
        }

        if(isset($_POST['brand_id'])) {
            $this->brand_id = $_POST['brand_id'];

            $filteredArticles = Article::getArticlesByBrandId($this->brand_id);

            $articles = $filteredArticles;
        }
        $this->loadView();
    }
}