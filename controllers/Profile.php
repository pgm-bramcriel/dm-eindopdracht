<?php

class ProfileController extends BaseController {
    protected function index () {
        global $profile_articles;
        global $current_user;

        $user_articles = Article::getArticleByUserId($current_user->user_id);
        $profile_articles = $user_articles;

        $this->loadView();
    }
}