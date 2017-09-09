<?php
namespace Peto16\Comment;

use \Anax\Common\AppInjectableInterface;
use \Anax\Common\AppInjectableTrait;

/**
 * Controller for Comment
 */
class CommentController implements AppInjectableInterface
{
    use AppInjectableTrait;

    private $comment;



    /**
     * Inject the Comment object.
     *
     * @param Comment $comment
     * @return void
     */
    public function inject(Comment $comment)
    {
        $this->comment = $comment;
    }



    /**
     * Add a comment
     *
     * @return void
     */
    public function addComment()
    {
        $titleText = $this->app->request->getPost('title');
        $commentText = $this->app->request->getPost('comment');
        $this->comment->addComment($titleText, $commentText);
        $comments = $this->comment->getAllComments();
        $this->app->view->add("comment/comment-page", [
            "comments" => $comments,
            "result" => "Kommentar skapad."
        ], "comments");
        if ($this->app->session->has('user')) {
            $this->app->view->add("comment/comment-form", [], "comments");
        }
    }



    /**
     * Delete a comment
     *
     * @param int       $commentId
     * @return void
     */
    public function delComment($commentId)
    {
        $this->comment->delComment($commentId);
        $this->app->redirect("comments");
    }



    /**
     * Get a comment
     *
     * @param int       $commentId
     * @return void
     */
    public function getComment($commentId)
    {
        if ($this->app->session->has('user')) {
            $comment = $this->comment->getComment($commentId);
            $this->app->view->add("comment/comment-form", [
                "comment" => $comment
            ], "main");
            $this->app->renderPage(["title" => "Redigera kommentar"]);
        }
    }



    /**
     * Edit a comment
     *
     * @param int       $commentId
     * @return void
     */
    public function editComment($commentId)
    {
        $titleText = $this->app->request->getPost('title');
        $commentText = $this->app->request->getPost('comment');
        $this->comment->editComment($titleText, $commentText, $commentId);
        $this->app->redirect("comments");
    }



    /**
     * Get all comments to display on page.
     *
     * @return void
     */
    public function getCommentsPage()
    {
        $comments = $this->comment->getAllComments();

        $this->app->view->add("comment/comment-page", ["comments" => $comments], "comments");
        if ($this->app->session->has('user')) {
            $this->app->view->add("comment/comment-form", [], "comments");
        }
        // $this->app->renderPage(["title" => "Kommentarer"]);
    }
}
