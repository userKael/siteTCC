<?php

if(isset($_POST["email"]) && !empty($_POST["email"]) 
&& isset($_POST["senha"]) && !empty($_POST["senha"])){

    include './conexaobd.php';
    include './ClassUsuario.php';

    $user = new Usuario();
    $email= addslashes( $_POST["email"]);
    $senha= addslashes( $_POST["senha"]);

    if($user->login($email, $senha) == true){
        $retorno = "logado";

    }else{
       $retorno = "Cadastro Inexistente";
    }

}else{
    $retorno = "Digite todos os campos";
}
echo $retorno;
