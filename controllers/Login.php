<?php

class LoginController extends BaseController {
    private $username;
    private $password;

    protected function index () {
        $this->loadView();

        if(isset($_POST['username']) && isset($_POST['password'])) {
            $this->username = $_POST['username'];
            $this->password = $_POST['password'];

            $user = Users::getByUsername($this->username);

            if ($user && password_verify($this->password, $user->password)) {
                $_SESSION['user_id'] = $user->user_id;
                $this->redirect('home');
            } else {
                echo 'User not registered.';
            }
          }
    }
}