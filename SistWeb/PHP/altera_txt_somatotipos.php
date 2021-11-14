<?php
include './conexaobd.php';

// if (
//     isset($_POST["texto"]) && !empty($_POST["texto"] 

// )) {

    $txt = $_POST['texto'];
    $id = $_POST['id'];

    try {

        $comando4 = $con->prepare("UPDATE text_somatotipo SET texto =? WHERE id =?");
        $comando4->bindParam(1, $txt);
        $comando4->bindParam(2, $id);
        $comando4->execute();

        if ($comando4->rowCount() > 0) {
            
            $retorno = "Texto alterado com Sucesso!";

        }else{
            $retorno = "Erro ao alterar cadastro !";
        }

    } catch (PDOException $erro) {
        $retorno = "Erro " . $erro->getMessage();
    }
// } else {
//     $retorno = "Digite todos os campos";
// }
echo $retorno;
