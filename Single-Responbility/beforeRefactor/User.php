<?php

class User
{
    public function create(array $data) {
        try {
            // save user
        } catch (DatabaseException $e) {
            $this->logError($e->getMessage());
        }
    }

    public function logError($message) {
        // write error to file 
    }
}
