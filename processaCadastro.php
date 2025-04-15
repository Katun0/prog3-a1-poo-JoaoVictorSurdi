<?php
// faz a requisição dos arquivos necessários
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Auth.php";

// também faz a requisição, mas é melhor de declarar (Também não funciona sem o Autoload da classe)
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

    // Verifica se o email já está cadastrado
    try {
        $user = new User($name, $email, $password);
        Auth::register($user);
        echo "Usuário cadastrado com sucesso!<a href='login.php'>Faça Login</a>";
        // Tratamento de erro para email já cadastrado
    }catch (Exception $e){
        echo "Erro ao cadastrar usuário" . $e->getMessage();
    }
} else {
    // Acesso indevido (sem submit): volta pro cadastro
    header("Location: cadastro.php");
    exit();
}