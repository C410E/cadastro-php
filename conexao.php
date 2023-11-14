<?php
try {
    $conexao = new PDO('pgsql:localhost:3000;dbname=cadastro_php', 'postgresql', '654789123');
} catch (Exception $erro) {
    try {
    $conexao = new PDO('pgsql:host=www.db4free.net;dbname=alunos_rogado', 'arthurrogado', 'arthurrogado');
    } catch (Exception $e) {
        $erro = $e->getMessage();
        echo "Erro: $erro";
    }
}
?>