<?php
class ArticleController extends BaseController {
    private $content;
    private $comment_id;
    private $updated_content;

    protected function index () {
        $this->viewParams['articles'] = Article::getAll();

        $this->loadView();
    }

    protected function detail ($params) {
        global $detail_comments;
        global $article;

        $detailArticle = Article::getArticleById($params[0]);

        $article_comments = Comments::getCommentsByArticleId($params[0]);

        $detail_comments = $article_comments;
        $article = $detailArticle;

        if(isset($_POST['content'])) {
            $this->content = $_POST['content'];

            $new_comment = Comments::postComment($this->content, $params[0]);
            $this->redirect($params[0] . '#comment');
        }

        if(isset($_POST['comment_id'])) {
            $this->comment_id = $_POST['comment_id'];

            $deleted_comment = Comments::deleteComment($this->comment_id);
            $this->redirect($params[0] . '#comment');
        }

        if(isset($_POST['updated_content'])) {
            $this->updated_content = $_POST['updated_content'];
            $this->comment_id = $_POST['new_comment_id'];

            $deleted_comment = Comments::updateComment($this->updated_content, $this->comment_id);
            $this->redirect($params[0] . '#comment');
        }


        $this->loadView();
    }
}