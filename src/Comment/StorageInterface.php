<?php

namespace Peto16\Comment;

/**
 * Interface for CommentStorage
 */
interface StorageInterface
{
    public function create($dataset);
    public function delete($commentId);
    public function update($dataset);
    public function read($commentId = null);
}
