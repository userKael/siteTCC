<?php 

include './conexaobd.php';

if(isset($_POST["email"])){$email=$_POST["email"];}
if(isset($_POST["senha"])){$senha=$_POST["senha"];}
if(isset($_POST["nome"])){$nome=$_POST["nome"];}

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

        $retorno = "cadastro feito";
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