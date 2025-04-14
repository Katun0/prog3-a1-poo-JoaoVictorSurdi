<?php

namespace classes;
class User
{
    private $name;
    private $email;
    private $password;

    public function __construct($name, $email, $password)
    {
        $this->name = htmlspecialchars(strip_tags($name));
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function PassHashVerification($password){
        return password_verify($password, $this->password);
    }
}