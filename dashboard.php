<?php
require_once 'classes/Session.php';
require_once 'classes/User.php';

use classes\Session;

// Verifica se o usuário está logado
if (!Session::isLogged()) {
    header("Location: login.php");
    exit();
}
// Procura o nome da criatura que visitou o site, se não tiver, marca como "Visitante"
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
<h2>Saudações, <?php echo htmlspecialchars($name);?>!</h2>

    <?php
    // Exibe o e-mail salvo no cookie, se existir
    if (isset($_COOKIE['emailOnCookie'])) {
        echo "<p>Seu e-mail salvo: " . $_COOKIE['emailOnCookie'] . "</p>";
    } else {
        // Se não houver cookie, exibe uma mensagem
        echo "<p>Nenhum e-mail salvo.</p>";
    }
    ?>
    <!-- Exibe o ID da sessão (Só pra Bonito mesmo) -->
    <p>Seu ID de sessão: <?php echo session_id(); ?></p>

    <!-- Logout do Usuário, destruíndo a sessão e limpando os Cookies-->
    <a href="logout.php">Logout</a><br>
    <!-- Cadastrar novo usuário -->
    <a href="cadastro.php">Cadastrar novo usuário</a><br>
    <!-- Retorna ao Login (SEM DELETAR OS COOKIES SALVOS)-->
    <a href="login.php">Retornar ao login</a><br>
</body>
</html>