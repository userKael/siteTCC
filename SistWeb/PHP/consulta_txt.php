<?php 
include './conexaobd.php';

if (
    isset($_POST["id"]) && !empty($_POST["id"])
) {

    $id = addslashes(filter_input(INPUT_POST, 'id'));
  
    try {

        $comando = $con->prepare("SELECT * FROM text_result WHERE id = ?");
        $comando->bindParam(1, $id);
        $comando->execute();

        if ($comando->rowCount() > 0) {
            $textos = $comando->fetchAll();
            $retorno = json_encode($textos);
        }else{
            $retorno = "Texto não encontrado";
        }

    } catch (PDOException $erro) {
        $retorno = "Erro " . $erro->getMessage();
    }
} else {
    $retorno = "Digite Algum ID";
}
echo $retorno;
