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
            $this->username = empty($_POST['username']) ? $current_user->username : $_POST['username'];
            $this->password = empty(password_hash($_POST['password'], PASSWORD_DEFAULT)) ? $current_user->password : password_hash($_POST['password'], PASSWORD_DEFAULT);
            $this->email = empty($_POST['email']) ? $current_user->email : $_POST['email'];
            $this->number = empty($_POST['number']) ? $current_user->number : $_POST['number'] ;
            $this->location = empty($_POST['location']) ? $current_user->location : $_POST['location'];

            $user = Users::updateUser($this->username, $this->password, $this->email, $this->number, $this->location);

            $this->redirect('/profile');
        }

        $this->loadView();
    }
}