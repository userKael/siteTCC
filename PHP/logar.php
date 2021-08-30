<?php

if(isset($_POST["email"]) && !empty($_POST["email"]) 
&& isset($_POST["senha"]) && !empty($_POST["senha"])){

    require './conexaobd.php';
    require './ClassUsuario.php';

    $user = new Usuario();
    $email= addslashes( $_POST["email"]);
    $senha= addslashes( $_POST["senha"]);

    if($user->login($email, $senha) == true){
        header("Location: ../teste_imc.html");

    }else{
        echo "<script>alert('Cadastro Inexistente');";
        echo "location.href='../index.html'</script>";
    }

}else{
    header("Location: ../index.html");
}

