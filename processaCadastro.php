<?php

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Auth.php";

use classes\User;
use classes\Auth;

if(isset($_POST['submit'])){
    // Verifica se o formulário foi enviado
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sanitização dos dados
    $name = htmlspecialchars(trim($name));
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = trim($password);

    // Validação dos dados
    try {
        $user = new User($name, $email, $password);
        Auth::register($user);
        echo "Usuário cadastrado com sucesso!<a href='login.php'>Faça Login</a>";
    }catch (Exception $e){
        echo "Erro ao cadastrar usuário" . $e->getMessage();
    }
} else {
    // Acesso indevido (sem submit): volta pro cadastro
    header("Location: cadastro.php");
    exit();
}