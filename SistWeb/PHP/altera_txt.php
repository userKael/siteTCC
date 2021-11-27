<?php
include './conexaobd.php';

if (
    isset($_POST["texto"]) && !empty($_POST["texto"] 
    &&  isset($_POST["recomenda"]) && !empty($_POST["recomenda"]))
) {

    $texto = $_POST['texto'];
    $id = addslashes(filter_input(INPUT_POST, 'id'));
    $recomenda = $_POST['recomenda'];

    try {

        $comando4 = $con->prepare("UPDATE text_result SET texto =?, recomenda =? WHERE id =?");
        $comando4->bindParam(1, $texto);
        $comando4->bindParam(2, $recomenda);
        $comando4->bindParam(3, $id);
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
