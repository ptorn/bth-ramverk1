<?php
namespace Peto16\Comment;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

/**
 * Controller for Comment
 */
class CommentController implements InjectionAwareInterface
{
    use InjectionAwareTrait;

    private $comment;



    /**
     * Inject the Comment object.
     *
     * @param Comment $comment
     * @return void
     */
    public function init()
    {
        $this->comment = $this->di->get("comment");
    }



    /**
     * Add a comment
     *
     * @return void
     */
    public function addComment()
    {
        $titleText = $this->di->get("request")->getPost('title');
        $commentText = $this->di->get("request")->getPost('comment');
        $this->comment->addComment($titleText, $commentText);
        $comments = $this->comment->getAllComments();
        $this->di->get("view")->add("comment/comment-page", [
            "comments" => $comments,
            "result" => "Kommentar skapad."
        ], "comments");
        if ($this->di->get("user")->getCurrentUser()) {
            $this->di->get("view")->add("comment/comment-form", [], "comments");
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
        $this->di->get("utils")->redirect("comments");
    }



    /**
     * Get a comment
     *
     * @param int       $commentId
     * @return void
     */
    public function getComment($commentId)
    {
        if ($this->di->get("user")->getCurrentUser()) {
            $comment = $this->comment->getComment($commentId);
            $this->di->get("view")->add("comment/comment-form", [
                "comment" => $comment
            ], "main");
            $this->di->get("utils")->renderPage(["title" => "Redigera kommentar"]);
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
        $titleText = $this->di->get("request")->getPost('title');
        $commentText = $this->di->get("request")->getPost('comment');
        $this->comment->editComment($titleText, $commentText, $commentId);
        $this->di->get("utils")->redirect("comments");
    }



    /**
     * Get all comments to display on page.
     *
     * @return void
     */
    public function getCommentsPage()
    {
        $comments = $this->comment->getAllComments();

        $this->di->get("view")->add("comment/comment-page", ["comments" => $comments], "comments");
        if ($this->di->get("user")->getCurrentUser()) {
            $this->di->get("view")->add("comment/comment-form", [], "comments");
        }
    }
}
