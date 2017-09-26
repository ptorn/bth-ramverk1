<?php

namespace Peto16\Comment;

use \Peto16\Comment\CommentStorageInterface;
use \Anax\Database\ActiveRecordModel;

/**
 * Class to communicate with the Database
 */
class CommentActiveRecordModel extends ActiveRecordModel implements CommentStorageInterface
{
    protected $tableName = "ramverk1_Comment";

    public $id;
    public $userId;
    public $title;
    public $comment;



    /**
     * Method to Create a comment in the database.
     *
     * @param array     $data userid, title, comment
     * @return void
     */
    public function createComment(Comment $comment)
    {
        $this->tableName = "ramverk1_Comment";
        $this->setCommentData($comment);
        $this->save();
    }



    /**
     * Method to read from the database. Nu param returns all unless id given.
     *
     * @param int       $commentId id for comment
     * @return array    with comments
     */
    public function readComment($commentId = null)
    {
        $this->tableName = "VCommentsDetails";
        $this->id = $commentId;
        if ($commentId === null) {
            return $this->findAll();
        }
        return $this->find("commentId", $this->id);
    }



    /**
     * Method to update comments.
     *
     * @param array     $data comment, title, commentId
     * @return void
     */
    public function updateComment(Comment $comment)
    {
        $this->tableName = "ramverk1_Comment";
        $this->setCommentData($comment);
        $this->updated = date("Y-m-d H:i:s");
        return $this->save();
    }



    /**
     * Delete a comment
     *
     * @param int       $commentId the comments id
     * @return void
     */
    public function deleteComment($commentId)
    {
        $this->tableName = "ramverk1_Comment";
        $this->find("id", $commentId);
        $this->deleted = date("Y-m-d H:i:s");
        return $this->save();
    }




    /**
     * Dynamicly set comment properties to its value.
     *
     * @param array            $userData Key, value array.
     */
    public function setCommentData($commentData)
    {
        foreach ($commentData as $key => $value) {
            $this->{$key} = $value;
        }
    }



    /**
     * Dynamicly get comment by field.
     *
     * @param  string          $field Fieldname to search.
     *
     * @param  mixed           $data Data to search for in the field.
     *
     * @return Comment            Returns a user.
     */
    public function getCommentByField($field, $data)
    {
        return $this->find($field, $data);
    }
}
