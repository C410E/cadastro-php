<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        echo "tudo certo";
    ?>
    <div class="container container-login">
        <form action="" method="post">
            <center>
            <h2>Sistema Alunos</h2>
            </center>
            <h3>Login</h3>
            <p>Usuario<input type="text" name="usuario" placeholder="Digite seu usuário..." value=<?php if (isset( $_COOKIE['usuario'] )) {
                echo $_COOKIE['usuario'];
            } ?>></p>
            <p>Senha<input type="password" name="senha" placeholder="Digite sua senha..."></p>
            <div id='aviso'></div>
            <input type="submit" name="entrar" value="Entrar">
        </form>
    </div>
</body>