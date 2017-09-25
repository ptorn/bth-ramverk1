<?php

namespace Peto16\User;

/**
 * Interface for UserStorage
 */
interface StorageInterface
{
    public function createUser($dataset);
    public function deleteUser($commentId);
    public function updateUser($dataset);
    public function getUserByField($field, $data);
}
