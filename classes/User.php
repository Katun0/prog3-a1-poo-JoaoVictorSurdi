<?php

namespace classes;
class User
{
    private $name;
    private $email;
    private $password;

    /// Construtor da classe User
    public function __construct($name, $email, $password)
    {
        // Sanitização dos dados
        $this->name = htmlspecialchars(strip_tags($name));
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
        // Hash de senha com método password_hash (Algorítmo default = 2y)
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    // Getters para acessar os atributos privados
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

    // Verifica se a senha informada bate com a senha armazenada
    public function PassHashVerification($password){
        return password_verify($password, $this->password);
    }
}