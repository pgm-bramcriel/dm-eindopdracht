<?php

class ProfileController extends BaseController {
    private $username;
    private $password;
    private $email;
    private $number;
    private $location;

    protected function index () {
        global $profile_articles;
        global $current_user;

        $user_articles = Article::getArticleByUserId($current_user->user_id);
        $profile_articles = $user_articles;

        if(isset($_POST['username']) || isset($_POST['password']) || isset($_POST['email']) || isset($_POST['number']) || isset($_POST['location'])) {
            $this->username = $_POST['username'];
            $this->password = $_POST['password'];
            $this->email = $_POST['email'];
            $this->number = $_POST['number'];
            $this->location = $_POST['location'];

            $user = Users::updateUser($this->username, $this->password, $this->email, $this->number, $this->location);

            $this->redirect('/profile');
        }

        $this->loadView();
    }
}