<?php
try {
    $conexao = new PDO('pgsql:localhost:3000;dbname=cadastro_php', 'postgresql', '654789123');
} catch (Exception $error) {
    try {
    $conexao = new PDO('pgsql:host=www.db4free.net;dbname=alunos_rogado', 'arthurrogado', 'arthurrogado');
    } catch (Exception $e) {
        echo $erro -> getMessage();
        echo "<br>";
        echo $erro -> getCode();
    }
}
?>