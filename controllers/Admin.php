<?php

class AdminController extends BaseController {
    private $uid;

    protected function index () {
        $this->loadView();

        if(isset($_POST['uid'])) {


            $this->uid = $_POST['uid'];

            $deletedUser = Users::deleteUser($this->uid);

            $this->redirect('/admin');
        }
    }
}