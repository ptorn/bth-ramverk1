<?php

namespace Peto16\Comment;

use \Peto16\Comment\CommentStorageInterface;
use \Anax\Database\Database as AnaxDatabase;

/**
 * Class to communicate with the Database
 */
class Database extends AnaxDatabase implements CommentStorageInterface
{
    const TABLE = "ramverk1_Comment";

    public $id;
    public $userId;
    public $title;
    public $comment;
    public $published;
    public $created;
    public $updated;
    public $deleted;



    /**
     * Method to inject the dependency for the class
     *
     * @param object    $di
     *
     * @return void
     */
    public function inject($di)
    {
        $this->db = $di->get("db");
        $this->db->connect();
    }



    /**
     * Method to Create a comment in the database.
     *
     * @param array     $data userid, title, comment
     *
     * @return void
     */
    public function createComment(Comment $comment)
    {
        $params = [
            $comment->userId,
            $comment->title,
            $comment->comment
        ];
        $query = "INSERT INTO " . self::TABLE . " (userId, title, comment) VALUES (?, ?, ?);";
        return $this->db->execute($query, $params);
    }



    /**
     * Method to read from the database. Nu param returns all unless id given.
     *
     * @param int       $commentId id for comment
     *
     * @return array    with comments
     */
    public function readComment($commentId = null)
    {
        $query = "SELECT * FROM " . self::TABLE . " WHERE id = ?;";
        if ($commentId === null) {
            $query = "SELECT * FROM VCommentsDetails;";
            return $this->db->executeFetchAll($query, []);
        }
        return $this->db->executeFetchAll($query, [$commentId])[0];
    }



    /**
     * Method to update comments.
     *
     * @param array     $data comment, title, comment id
     *
     * @return void
     */
    public function updateComment(Comment $comment)
    {
        $params = [
            $comment->comment,
            $comment->title,
            $comment->id
        ];
        $query = "UPDATE " . self::TABLE . " SET comment=?, title=?, updated=NOW() WHERE id = ?;";
        return $this->db->execute($query, $params);
    }



    /**
     * Delete a comment
     *
     * @param int       $commentId the comments id
     *
     * @return void
     */
    public function deleteComment($commentId)
    {
        $query = "UPDATE " . self::TABLE . " SET deleted=NOW() WHERE id = ?;";
        return $this->db->execute($query, [$commentId]);
    }


    /**
     * Get comments based on field.
     *
     * @param  string       $field Field to search for.
     * @param  mixed        $data  Data to search in field.
     * @return Comment      A comment from storage.
     */
    public function getCommentByField($field, $data)
    {
        $query = "SELECT * FROM " . self::TABLE . " WHERE $field = ?;";
        if ($data === null) {
            $query = "SELECT * FROM VCommentsDetails;";
            return $this->db->executeFetchAll($query, []);
        }
        return $this->db->executeFetchAll($query, [$data])[0];
    }
}
