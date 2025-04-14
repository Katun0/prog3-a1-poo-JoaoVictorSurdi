<?php
require_once 'classes/Session.php';
require_once 'classes/User.php';

use classes\Session;

if (!Session::isLogged()) {
    header("Location: login.php");
    exit();
}

$name = $_SESSION['user']->getName() ?? 'Visitante';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<h2>Bem-vindo, <?php echo htmlspecialchars($name);?>!</h2>

    <?php
    if (isset($_COOKIE['emailOnCookie'])) {
        echo "<p>Seu e-mail salvo: " . $_COOKIE['emailOnCookie'] . "</p>";
    } else {
        echo "<p>Nenhum e-mail salvo.</p>";
    }
    ?>

    <p>Seu ID de sessão: <?php echo session_id(); ?></p>
    <a href="logout.php">Logout</a><br>
    <a href="cadastro.php">Cadastrar novo usuário</a><br>
    <a href="login.php">Retornar ao login</a><br>
</body>
</html>