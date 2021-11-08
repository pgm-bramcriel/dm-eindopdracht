<?php

class RegisterController extends BaseController {
    private $username;
    private $password;
    private $email;
    private $number;
    private $location;

    protected function index () {

        $this->loadView();

        if(isset($_POST['username']) && isset($_POST['password'])) {
            $this->username = $_POST['username'];
            $this->password = $_POST['password'];
            $this->email = $_POST['email'];
            $this->number = $_POST['number'];
            $this->location = $_POST['location'];

            $user = Users::postUser($this->username, $this->password, $this->email, $this->number, $this->location);

            $this->redirect('home');
        }
    }
}