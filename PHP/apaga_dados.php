<?php
session_start();
include './conexaobd.php';

$email = $_SESSION['email'];

try {

    $comando = $con->prepare("DELETE FROM cadastro WHERE email = ?");
    $comando->bindParam(1, $email);
    $comando->execute();

    if ($comando->rowCount() > 0) {

        unset($_SESSION['email']);
        unset($_SESSION['nome']);
        unset($_SESSION['imc']);
        $retorno = "";
    } else {
        $retorno = "Erro ao Deletar cadastro !";
    }
} catch (PDOException $erro) {
    $retorno = "Erro " . $erro->getMessage();
}

echo $retorno;
