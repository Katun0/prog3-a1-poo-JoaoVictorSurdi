<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="css/cadastro.css">
    </head>

    <body class="centerText">
    <div class="wrapper">
        <h1>Registro</h1>
        <form action="processaCadastro.php" method="post">

            <div class="input-box">
            <input type="text" name="name" placeholder="Nome" required>
            </div>

            <div class="input-box">
            <input type="email" name="email" placeholder="E-mail" required>
            </div>

            <div class="input-box">
            <input type="password" name="password" placeholder="Senha" required>
            </div>

            <button type="submit" name="submit" class="btn"> Cadastrar</button>

            <div class="login-link">
                <a href="login.php">Já possuí cadastro? Faça Login</a>
            </div>
        </form>
    </div>
    </body>
</html>