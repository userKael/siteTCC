<?php
session_start();
include './conexaobd.php';

$email = $_SESSION['email'];

$arquivoAtual = $_FILES['arquivo']['name'];
$arquivoTemp = $_FILES['arquivo']['tmp_name'];
$destino = '../imagensUser/' . $arquivoAtual;

if($arquivoAtual == ""){

    echo "Selecione alguma imagem";

}else{

    try {
        $comando = $con->prepare("SELECT imagem FROM img_perfil WHERE contato_cadastro = ?");
        $comando->bindParam(1, $email);
        $comando->execute();
        $dado = $comando->fetch();
        $imagem = $dado['imagem'];
    
        unlink('C:/xampp/htdocs/siteTCC/Site/imagensUser/' . $imagem);
    
        $comando = $con->prepare("UPDATE img_perfil SET imagem=?  WHERE contato_cadastro = ?");
        $comando->bindParam(1, $arquivoAtual);
        $comando->bindParam(2, $email);
        $comando->execute();
        move_uploaded_file($arquivoTemp, $destino);
    
        if ($comando->rowCount() > 0) {
    
            echo 'Imagem alterada';
        } else {
    
            echo "Erro ao alterar imagem";
        }
    } catch (PDOException) {
    
        echo "Erro ao alterar imagem";
    }
    
}

