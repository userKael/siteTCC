<?php 

include './conexaobd.php';

if(isset($_POST["email"])){
    $email= addslashes( $_POST["email"]);
    
}
if(isset($_POST["senha"])){
    $senha=addslashes($_POST["senha"]);
}
if(isset($_POST["nome"])){
    $nome=addslashes($_POST["nome"]);
}

try{
    $comando=$con->prepare("insert into cadastro values (?,?,?)");
    $comando->bindParam(1, $email);
    $comando->bindParam(2, $senha);
    $comando->bindParam(3, $nome);
    $comando->execute();

    if($comando->rowCount() >0){
        
        $email = null;
        $senha = null;
        $nome = null;

        $retorno = "Cadastro Realizado com Sucesso!";
    }
    else
    {
        $retorno = "falha ao cadastrar";
    }
}
catch(PDOException $erro)
{
    $retorno = "Erro " .$erro->getMessage();
}
echo $retorno;


?>