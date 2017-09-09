<?php

namespace Peto16\Comment;

use \Peto16\Comment\StorageInterface;

/**
 * Class to communicate with the Database
 */
class Database implements StorageInterface
{
    const TABLE = "ramverk1_Comment";
    private $db;



    /**
     * Method to inject the dependency for the class
     *
     * @param object    $app
     * @return void
     */
    public function inject($dependency)
    {
        $this->db = $dependency;
        $this->db->connect();
    }



    /**
     * Method to Create a comment in the database.
     *
     * @param array     $data userid, title, comment
     * @return void
     */
    public function create($data)
    {
        $query = "INSERT INTO " . self::TABLE . " (userId, title, comment) VALUES (?, ?, ?);";
        return $this->db->execute($query, $data);
    }



    /**
     * Method to read from the database. Nu param returns all unless id given.
     *
     * @param int       $commentId id for comment
     * @return array    with comments
     */
    public function read($commentId = null)
    {
        $query = "SELECT * FROM " . self::TABLE . " WHERE id = ?;";
        if ($commentId === null) {
            $query = "SELECT * FROM VCommentsDetails;";
            return $this->db->executeFetchAll($query, []);
        }
        return $this->db->executeFetchAll($query, $commentId);
    }



    /**
     * Method to update comments.
     *
     * @param array     $data comment, title, comment id
     * @return void
     */
    public function update($data)
    {
        $query = "UPDATE " . self::TABLE . " SET comment=?, title=?, updated=NOW() WHERE id = ?;";
        return $this->db->execute($query, $data);
    }



    /**
     * Delete a comment
     *
     * @param int       $commentId the comments id
     * @return void
     */
    public function delete($commentId)
    {
        $query = "UPDATE " . self::TABLE . " SET deleted=NOW() WHERE id = ?;";
        return $this->db->execute($query, $commentId);
    }
}
