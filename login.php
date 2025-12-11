<?php
require_once 'config.php';
require_once 'mensagens.php';

//Verificar se o usuário já está logado
if (isset($_SESSION['usuario_id'])) {
    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="pt_BR">
    <meta name="viewport" content="width=device-width, initial-sscale=1.0">
    <title>Login - Sistema Financeiro</title>
    <link rel="stylesheet" href="style-login.css">
</head>

<body>
    <div class="container">
        <h1>Sistema Financeiro Pessoal</h1>
        <h2>Login</h2>

        <?php exibir_mensagem(); ?>

        <form action="autenticar.php" method="post">
            <div>
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" required>
            </div>
            <div>
                <button type="submit">Entrar</button>
            </div>
        </form>
        <!-- <br>
        <br>
        <br>
        <br> -->
        <p class="link-cadastro">Nâo tem conta?<a href="registro.php"> Cadastre-se aqui.</a></p>
    </div>
    

</body>

</html>