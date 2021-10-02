<?php
include_once './conexaobd.php';

$email = addslashes(filter_input(INPUT_POST, 'email'));

try {

    $comando1 = $con->prepare("SELECT imagem FROM img_perfil WHERE contato_cadastro = ?");
    $comando1->bindParam(1, $email);
    $comando1->execute();
    $dado = $comando1->fetch();
   
    if ($comando1->rowCount() > 0) {
        $imagem = $dado['imagem'];
        unlink('C:/xampp/htdocs/siteTCC/Site/imagensUser/' . $imagem);
    }

    $comando = $con->prepare("DELETE FROM cadastro WHERE email = ?");
    $comando->bindParam(1, $email);
    $comando->execute();

    if ($comando->rowCount() > 0) {

        $retorno = "";

    } else {
        $retorno = "Erro ao Deletar cadastro !";
    }
} catch (PDOException $erro) {
    $retorno = "Erro " . $erro->getMessage();
}

echo $retorno;