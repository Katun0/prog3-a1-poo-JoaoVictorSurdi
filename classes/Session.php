<?php

namespace classes;
class Session
{
    public static function sessionStart()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function sessionDestroy()
    {
        if (session_status() != PHP_SESSION_NONE) {
            session_unset();

            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"],
                    $params["secure"], $params["httponly"]
                );
            }


            session_destroy();
        }
    }

    public static function setSessionValue($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function getSessionValue($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }
    
    public static function login($email)
    {
        self::sessionStart();
        $_SESSION['user'] = $email;
    }

    public static function isLogged()
    {
        self::sessionStart();
        return isset($_SESSION['user']);
    }
}