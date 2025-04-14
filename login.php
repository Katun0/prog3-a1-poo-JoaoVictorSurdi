<?php
$emailOnCookie = isset($_COOKIE['emailOnCookie']) ? $_COOKIE['emailOnCookie'] : null;
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>

</head>
<body class="centerText">
<div class="wrapper">
    <form action="processaLogin.php" method="post">
        <h1>Login</h1>
        <div class="input-box">
            <input type="email" name='email' placeholder="  Email" value="<?php echo ($emailOnCookie); ?>" required>
            <i class='bx bxs-user-rectangle'></i>
        </div>

        <div class="input-box">
            <input type="password" name='pass' placeholder="  Senha" required>
            <i class='bx bxs-lock-alt'></i>
        </div>
        
        <div class="remember-me">
            <input type="checkbox" name="emailOnCookie" id="emailOnCookie" <?php echo ($emailOnCookie) ? 'checked' : ''; ?>>
            <label for="emailOnCookie">Lembrar e-mail</label>

        <button type="submit" name='submit' class="btn">Login</button>

        <div class="register-link">
            <p>Não possui uma conta?
                <a href="cadastro.php">Registre-se!</a></p>
        </div>
    </form>
</div>
</body>
</html>