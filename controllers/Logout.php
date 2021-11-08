<?php

class LogoutController extends BaseController {

    protected function index () {
        $this->loadView();

        session_destroy();
        $this->redirect('home');
    }
}