<?php 
$email = $_SESSION['email'];
try{
    
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


    // $con->query("CALL contar_testes(@quant)");
    // $quant = $con->query("SELECT @quant AS quant")->fetch(PDO::FETCH_ASSOC);

}
catch(PDOException $erro){
    $retorno = "Erro " . $erro->getMessage();
    echo "<script> alert($retorno)</script>";
}

