<?php

namespace Peto16\Comment;

/**
 * Comment class
 */
class Comment
{

    private $comStorage;
    private $session;
    private $user;



    /**
     * Constructor to inject dependencies
     *
     * @param           Session $session
     * @param           CommentStorage $commentStorage
     */
    public function __construct($session, CommentStorage $commentStorage)
    {
        $this->session = $session;
        $this->comStorage = $commentStorage;
    }



    /**
     * Add comment
     *
     * @param string    $titleText
     * @param string    $commentText
     * @return void
     */
    public function addComment($titleText, $commentText)
    {
        $this->comStorage->create([$this->getUserId(), $titleText, $commentText]);
    }



    /**
     * Edit comment
     *
     * @param string    $titleText
     * @param string    $commentText
     * @param int       $commentId
     * @return void
     */
    public function editComment($titleText, $commentText, $commentId)
    {
        $this->comStorage->update([$commentText, $titleText, $commentId]);
    }



    /**
     * Delete comment.
     *
     * @param int       $commentId
     * @return void
     */
    public function delComment($commentId)
    {
        $this->user = $this->session->get('user');
        try {
            if ($this->session->has('user') && $this->user->enabled === 1) {
                $this->comStorage->delete([$commentId]);
                return;
            }
            throw new Exception("Not logged in.", 1);
        } catch (Exception $e) {
            echo "Caught exception: ", $e->getMessage();
        }
    }



    /**
     * Get the user id from the session
     *
     * @return int      The id of the current logged in user.
     */
    public function getUserId()
    {
        if ($this->session->has('user')) {
            return $this->session->get('user')->id;
        }
        return false;
    }



    /**
     * Check if logged in user is administrator.
     *
     * @return boolean
     */
    private function isLoggedInAdmin()
    {
        if ($this->session->has('user')) {
            return $this->session->get('user')->administrator;
        }
        return false;
    }


    /**
     * Get all comments stored and set if current user logged in is owner.
     *
     * @return array        Array with all comments.
     */
    public function getAllComments()
    {
        $userId = $this->getUserId();
        $allComments = $this->comStorage->read();
        return array_map(function ($item) use ($userId) {
            $item->Owner = false;
            $item->UserAdmin = false;
            if ($item->UserId === $userId) {
                $item->Owner = true;
            }
            if ($this->isLoggedInAdmin()) {
                $item->UserAdmin = true;
            }
            return $item;
        }, $allComments);
    }



    /**
     * Get a comment with a given id.
     *
     * @param int           $id
     * @return object
     */
    public function getComment($id)
    {
        return $this->comStorage->read($id);
    }
}
