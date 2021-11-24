<?php

include './conexaobd.php';

$id = $_POST['id'];
$arquivoAtual = $_FILES['arquivo']['name'];
$arquivoTemp = $_FILES['arquivo']['tmp_name'];
$destino = 'C:/xampp/htdocs/siteTCC/Site/IMGs/' . $arquivoAtual;

if($arquivoAtual == ""){

    echo "Selecione alguma imagem";

}else{

    try {
        $comando = $con->prepare("SELECT imagem FROM text_exercicio WHERE id = ?");
        $comando->bindParam(1, $id);
        $comando->execute();
        $dado = $comando->fetch();
        $imagem = $dado['imagem'];
    
        unlink('C:/xampp/htdocs/siteTCC/Site/IMGs/' . $imagem);
    
        $comando = $con->prepare("UPDATE text_exercicio SET imagem=?  WHERE id = ?");
        $comando->bindParam(1, $arquivoAtual);
        $comando->bindParam(2, $id);
        $comando->execute();
        move_uploaded_file($arquivoTemp, $destino);
    
        if ($comando->rowCount() > 0) {
    
            echo 'Imagem alterada';
        } else {
    
            echo "Erro ao alterar imagem";
        }
    } catch (PDOException $e) {
    
        echo "Erro ao alterar imagem";
    }


    
}

