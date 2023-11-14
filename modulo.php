<?php
require 'conexao.php';

function usuarioExistente($userPost, $execao = null) {
    require 'conexao.php';

    $dados = $conexao->prepare("SELECT usuario FROM alunos;");
    $dados->execute();
    $users = $dados->fetchAll(PDO::FETCH_OBJ);
    foreach($users as $user) {
        if ($userPost == $user->usuario AND $userPost != $execao) {
            return true;
        }
    }
    return false;
}
?>