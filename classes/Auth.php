<?php


namespace classes;
require_once "User.php";
require_once "Session.php";

use classes\Session;
use classes\User;


class Auth
{
    public static function userCollection()
    {
        Session::sessionStart();
        return $_SESSION['users'] ?? [];
    }
    

    public static function login($email, $password)
    {
        $userCollection = self::userCollection();
    
        foreach ($userCollection as $user) {
            // Checa se o email bate
            if ($user->getEmail() === $email) {
                // Verifica a senha usando password_verify
                if ($user->PassHashVerification($password)) {
                    // Login bem-sucedido: salva o usuário na sessão
                    Session::login($user);
                    return true;
                }
            }
        }
    
        // Se não encontrou o usuário ou senha inválida
        return false;
    }
    

    public static function register(User $user)
    {
        Session::sessionStart();
        $_SESSION['users'][] = $user;
    }
    
    }
