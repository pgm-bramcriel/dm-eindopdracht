<?php

class HomeController extends BaseController {
    private $name;
    private $description;
    private $price;
    private $image;

    protected function index () {
        $this->viewParams['articles'] = Article::getAll();

        if(isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['image'])) {
            $this->name = $_POST['name'];
            $this->description = $_POST['description'];
            $this->price = $_POST['price'];
            $this->image = $_POST['image'];

            $newArticle = Article::postArticle($this->name, $this->description, $this->price);
            $articleImage = Media::postMedia($this->image, $newArticle->article_id);

            $this->redirect('home');
        }
        $this->loadView();
    }
}