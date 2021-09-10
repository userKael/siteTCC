<?php
session_start();
include './conexaobd.php';

$email = $_SESSION['email'];

$arquivoAtual = $_FILES['arquivo']['name'];
$arquivoTemp = $_FILES['arquivo']['tmp_name'];
$destino = '../imagensUser/' . $arquivoAtual;

    try {
        $comando = $con->prepare("SELECT imagem FROM img_perfil WHERE contato_cadastro = ?");
        $comando->bindParam(1, $email);
        $comando->execute();
        $dado = $comando->fetch();
        $imagem = $dado['imagem'];
    
        $comando = $con->prepare("DELETE FROM img_perfil WHERE contato_cadastro = ?");
        $comando->bindParam(1, $email);
        $comando->execute();

        if ($comando->rowCount() > 0) {

            echo 'Imagem excluida com sucesso!';
            unlink('C:/xampp/htdocs/siteTCC/imagensUser/' . $imagem);

        } else {

            echo "Erro ao excluir imagem";
        }
    } catch (PDOException) {

        echo "Erro ao excluir imagem";
    }


