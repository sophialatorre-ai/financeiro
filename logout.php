<?php
require_once 'config.php';
require_once 'mensagens.php';

//fazer logout
session_unset();
session_destroy();

//Redireciona para login
header('Location: login.php');
exit;
?>