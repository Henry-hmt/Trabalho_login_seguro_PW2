<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Seguro</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="login-container">
        <h2> Tela de Login Seguro</h2>
        <form action="index.php" method="POST">
            <label for="usuario">Usuário:</label>
            <input type="text" name="usuario" required><br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" required><br>
            <input class="btn" type="submit" value="Login">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];

            $usuario_armazenado = "admin";
            $senha_armazenada_hash = password_hash("12345", PASSWORD_DEFAULT);

            if ($usuario == $usuario_armazenado && password_verify($senha, $senha_armazenada_hash)) {
                header("Location: destino.php"); 
                exit();
            } else {
                echo "<p class='error-message'>Nome de usuário ou senha incorretos.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
