<?php

namespace Peto16\Comment;

/**
 * Interface for CommentStorage
 */
interface StorageInterface
{
    public function createComment(Comment $comment);
    public function deleteComment($commentId);
    public function updateComment(Comment $comment);
    public function readComment($commentId = null);
    public function getCommentByField($field, $data);
}
