<?php
require_once 'User.php';

class Admin extends User {
    
    function __construct($name, $email) {
        parent::__construct($name, $email);
        $this->role = "admin";
    }
    
    
    function createUser($name, $email) {
        $user = new User($name, $email);
        return $user;
    }
    
    
    function getUserData($user) {
        $arr = [
            "id" => $user->id,
            "name" => $user->name,
            "email" => $user->email,
            "role" => $user->role
        ];
        return $arr;
    }
}
?>