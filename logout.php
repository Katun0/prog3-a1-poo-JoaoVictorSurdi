<?php
require_once __DIR__ . "/classes/Session.php";

use classes\Session;

// Inicia a sessão para poder destruí-la
Session::sessionStart();

// Destrói a sessão
Session::sessionDestroy();

// Remove o cookie de email, se existir
if (isset($_COOKIE['emailOnCookie'])) {
    setcookie('emailOnCookie', '', time() - 3600, '/');
}
if ($email) {
    setcookie('remember_me', '', time() - 3600, '/');
}

// Redireciona para a página de login
header('Location: login.php');
exit;