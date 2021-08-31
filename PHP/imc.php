<?php

include './conexaobd.php';
include './ClassUsuario.php';

$email = $_SESSION['email'];
$cad = new Usuario();


if(isset($_POST["data_nascimento"])){
    $data_nascimento= addslashes( $_POST["data_nascimento"]);
    
}
if(isset($_POST["altura"])){
    $altura= addslashes( $_POST["altura"]);
    
}
if(isset($_POST["peso"])){
    $peso= addslashes( $_POST["peso"]);
    
}
if(isset($_POST["sexo"])){
    $sexo= addslashes( $_POST["sexo"]);
    
}
if(isset($_POST["rotina_exercicios"])){
    $rotina_exercicios= addslashes( $_POST["rotina_exercicios"]);
    
}
$idade = $cad->idade($data_nascimento);



// if($cad->teste($data_nascimento,$altura, $peso,$sexo, $email) == true){
    
// }else{
//     echo "<script>alert('Ops deu algo de errado :( ');";
// }
