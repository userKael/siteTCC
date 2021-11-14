<?php
include './conexaobd.php';

if (
    isset($_POST["txt_explica"]) && !empty($_POST["txt_explica"] 

)) {

    $txt_explica = $_POST['txt_explica'];
    $id = $_POST['id'];

    try {

        $comando4 = $con->prepare("UPDATE text_somatotipo SET txt_ex =? WHERE id =?");
        $comando4->bindParam(1, $txt_explica);
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
} else {
    $retorno = "Digite todos os campos";
}
echo $retorno;
