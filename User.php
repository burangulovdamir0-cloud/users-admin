<?php
class User {
    public $id;
    public $name;
    public $email;
    public $role = "user";
    
    function __construct($name, $email) {
        $this->id = rand(100, 999);
        $this->name = $name;
        $this->email = $email;
    }
    
    function show() {
        echo "Имя: $this->name, Email: $this->email, Роль: $this->role<br>";
    }
}
?>