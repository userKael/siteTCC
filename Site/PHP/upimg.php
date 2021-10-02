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
        $comando = $con->prepare("INSERT INTO img_perfil VALUES (null,?,?)");
        $comando->bindParam(1, $arquivoAtual);
        $comando->bindParam(2, $email);
        $comando->execute();

        if ($comando->rowCount() > 0) {
            move_uploaded_file($arquivoTemp, $destino);

            echo "Imagem cadastrada com sucesso!";
        } else {
       
            echo "erro ao cadastrar imagem";
        }
    } catch (PDOException) {
        
        echo "erro ao cadastrar imagem";
    }


}
