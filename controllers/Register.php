<?php

class RegisterController extends BaseController {
    private $username;
    private $password;
    private $confirmpassword;
    private $email;
    private $number;
    private $location;

    protected function index () {

        $this->loadView();

        if(isset($_POST['username']) && isset($_POST['password'])) {
            $this->username = $_POST['username'];
            $this->password = $_POST['password'];
            $this->confirmpassword = $_POST['confirmpassword'];
            $this->email = $_POST['email'];
            $this->number = $_POST['number'];
            $this->location = $_POST['location'];

            if ($this->password === $this->confirmpassword) {
                $this->password = password_hash($this->password, PASSWORD_DEFAULT);
                $user = Users::postUser($this->username, $this->password, $this->email, $this->number, $this->location);
                
                $this->redirect('home');
            } else {
                echo '<p>Passwords do not match</p>';
            }
        }
    }
}