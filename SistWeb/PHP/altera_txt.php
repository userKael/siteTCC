<?php
include './conexaobd.php';

if (
    isset($_POST["texto"]) && !empty($_POST["texto"])
) {

    $texto = addslashes(filter_input(INPUT_POST, 'texto'));
    $id = addslashes(filter_input(INPUT_POST, 'id'));

    try {

        $comando4 = $con->prepare("UPDATE text_result SET texto =? WHERE id =?");
        $comando4->bindParam(1, $texto);
        $comando4->bindParam(2, $id);
        $comando4->execute();

        if ($comando4->rowCount() > 0) {
            
            $retorno = "Cadastro alterado com Sucesso!";

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
