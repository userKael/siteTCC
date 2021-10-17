<?php
$email = $_SESSION['email'];
try {

    $comando = $con->prepare("SELECT * FROM img_perfil WHERE contato_cadastro = ?");
    $comando->bindParam(1, $email);
    $comando->execute();

    $result = $con->prepare("SELECT * FROM result_teste WHERE contato_cadastro = ?");
    $result->bindParam(1, $email);
    $result->execute();
    $results = $result->rowCount();

    $teste = $con->prepare("SELECT * FROM teste WHERE contato_cadastro = ?");
    $teste->bindParam(1, $email);
    $teste->execute();

    $teste2 = $con->prepare("SELECT * FROM teste WHERE contato_cadastro = ?");
    $teste2->bindParam(1, $email);
    $teste2->execute();

    $coluna1 = $con->prepare("SELECT somatotipo FROM result_teste WHERE contato_cadastro=? AND somatotipo = 'ectomorfo'");
    $coluna1->bindParam(1, $email);
    $coluna1->execute();
    $linhacol1 = $coluna1->rowCount();

    $coluna2 = $con->prepare("SELECT somatotipo FROM result_teste WHERE contato_cadastro=? AND somatotipo = 'mesomorfo'");
    $coluna2->bindParam(1, $email);
    $coluna2->execute();
    $linhacol2 = $coluna2->rowCount();

    $coluna3 = $con->prepare("SELECT somatotipo FROM result_teste WHERE contato_cadastro=? AND somatotipo = 'endomorfo'");
    $coluna3->bindParam(1, $email);
    $coluna3->execute();
    $linhacol3 = $coluna3->rowCount();

} 
catch (PDOException $erro) 
{
    $retorno = "Erro " . $erro->getMessage();
    echo "<script> alert($retorno)</script>";
}
