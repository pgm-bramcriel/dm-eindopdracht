<?php

class LoginController extends BaseController {
    private $username;
    private $password;

    protected function index () {
        $this->loadView();

        if(isset($_POST['username']) && isset($_POST['password'])) {
            $this->username = $_POST['username'];
            $this->password = $_POST['password'];

            $user = Users::getUserByUsername($this->username, $this->password);

            if ($user) {
                $_SESSION['user_id'] = $user->user_id;
                $this->redirect('home');
            }
          }
    }
}