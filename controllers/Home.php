<?php

class HomeController extends BaseController {
    private $name;
    private $description;
    private $price;

    protected function index () {
        $this->viewParams['articles'] = Article::getAll();

        if(isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price'])) {
            $this->name = $_POST['name'];
            $this->description = $_POST['description'];
            $this->price = $_POST['price'];

            $newArticle = Article::postArticle($this->name, $this->description, $this->price);
            $this->redirect('home');
        }
        $this->loadView();
    }
}