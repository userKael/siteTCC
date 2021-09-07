<?php 

include './conexaobd.php';

if(isset($_POST["email"]) && !empty($_POST["email"]) 
&& isset($_POST["senha"]) && !empty($_POST["senha"])
&& isset($_POST["nome"])  && !empty($_POST["nome"])){


    $email= addslashes( $_POST["email"]);
    $senha=addslashes($_POST["senha"]);
    $nome=addslashes($_POST["nome"]);

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
}else{
    
    $retorno = "Digite todos os campos";

}
echo $retorno;
?>