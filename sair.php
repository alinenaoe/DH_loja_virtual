<?php
session_start();
//deslogar usuário
session_destroy();
//voltar para a home
header('Location:index.php');
?>

