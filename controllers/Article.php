<?php
class ArticleController extends BaseController {

    protected function index () {
        $this->viewParams['articles'] = Article::getAll();

        $this->loadView();
    }

    protected function detail ($params) {
        global $detail_comments;

        $this->viewParams['article'] = Article::getById($params[0]);

        $article_comments = Comments::getCommentsByArticleId($params[0]);

        $detail_comments = $article_comments;
        $this->loadView();
    }
}
