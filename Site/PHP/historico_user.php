<?php 
$email = $_SESSION['email'];
try{
    $comando = $con->prepare("SELECT * FROM img_perfil WHERE contato_cadastro = ?");
    $comando->bindParam(1, $email);
    $comando->execute();

}
catch(PDOException $erro){
    $retorno = "Erro " . $erro->getMessage();
    echo "<script> alert($retorno)</script>";
}



try{

    $result = $con->prepare("SELECT * FROM result_teste WHERE contato_cadastro = ?");
    $result->bindParam(1, $email);
    $result->execute();
    $testes = $result->rowCount();

}
catch(PDOException $erro){

    $retorno2 = "Erro " . $erro->getMessage();
    echo "<script> alert($retorno2)</script>";

}



try{

    $teste = $con->prepare("SELECT * FROM teste WHERE contato_cadastro = ?");
    $teste->bindParam(1, $email);
    $teste->execute();
 

}
catch(PDOException $erro){

    $retorno3 = "Erro " . $erro->getMessage();
    echo "<script> alert($retorno3)</script>";

}
