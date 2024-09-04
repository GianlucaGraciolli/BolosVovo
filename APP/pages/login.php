<?php
require __DIR__ . "/../config/config.php";
require "./partials/header.php";
session_start();

$user = filter_input(INPUT_POST, "user");
$pwd = htmlspecialchars(filter_input(INPUT_POST, "pwd"));

if ($user && $pwd) {
    $sql = $pdo->prepare("SELECT * from Usuario where nomeUsuario:nomeUsuario AND senhaUsuario=:senhaUsuario");
    $sql->bindValue(":nomeUsuario", $user);
    $sql->bindValue(":senhaUsuario", $pwd);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        $_SESSION["userLogged"] = $row["nomeUsuario"];
        header("Location: index.html");
    } else {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mensagem = "Usuário ou senha Inválidos!";
        }
    }
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $mensagem = "Usuário ou senha Inválidos!";
    }
}
?>
    </header>

    <main>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="" method="post">
            <div class="input-group">
                <label for="username">Usuário</label>
                <input type="text" id="username" name="user" required>
            </div>
            <div class="input-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="pwd" required>
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
