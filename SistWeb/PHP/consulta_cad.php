<?php 
include './conexaobd.php';

if (
    isset($_POST["email"]) && !empty($_POST["email"])
) {

    $email = addslashes(filter_input(INPUT_POST, 'email'));
  
    try {

        $comando = $con->prepare("SELECT * FROM cadastro WHERE email = ?");
        $comando->bindParam(1, $email);
        $comando->execute();

        if ($comando->rowCount() > 0) {
            $cad = $comando->fetchAll();
            $retorno = json_encode($cad);
        }else{
            $retorno = "Cadastro não encontrado";
        }

    } catch (PDOException $erro) {
        $retorno = "Erro " . $erro->getMessage();
    }
} else {
    $retorno = "Digite Algum Email";
}
echo $retorno;