<?php
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Auth.php";
require_once __DIR__ . "/classes/Session.php";

use classes\Auth;
use classes\Session;

Session::sessionStart(); // inicia sessão com segurança

if (isset($_POST['submit'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['pass']);

    if (Auth::login($email, $password)) {
        // Salva cookie, se checkbox estiver marcado
        if (isset($_POST['emailOnCookie'])) {
            $expiration = time() + (86400 * 30);
            setcookie('emailOnCookie', $email, $expiration, "/");
        }
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Email ou senha inválidos!";
    }
} else {
    // Acesso indevido (sem submit): volta pro login
    header("Location: login.php");
    exit();
}
