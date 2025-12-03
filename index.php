<?php
require_once 'config.php';

//Verificar se o usuário está logado
if (!isset($_SESSION['usuario_id'])){
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt_BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema Financeiro</title>
</head>
<body>
    <h1>Sistema Financeiro</h1>
</body>
</html>