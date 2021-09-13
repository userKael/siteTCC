<?php
if (
    isset($_POST["flexRadioDefault"]) && !empty($_POST["flexRadioDefault"])
    && isset($_POST["pergunta1"]) && !empty($_POST["pergunta1"])
    && isset($_POST["pergunta2"]) && !empty($_POST["pergunta2"])
    && isset($_POST["pergunta3"]) && !empty($_POST["pergunta3"])
) {

    include './conexaobd.php';
    include './ClassUsuario.php';
    include './ClassIMC.php';

    $email = $_SESSION['email'];
    $cad = new Usuario();
    $imc = new cla_imc();

    $pulso = addslashes(filter_input(INPUT_POST, 'flexRadioDefault'));
    $p1 = addslashes(filter_input(INPUT_POST, 'pergunta1'));
    $p2 = addslashes(filter_input(INPUT_POST, 'pergunta2'));
    $p3 = addslashes(filter_input(INPUT_POST, 'pergunta3'));

    $result =  $p1 + $p2 + $p3 +  $pulso;

    if($result >= 5 && $result <=7){

        echo "ectomorfo <br>";
        echo $result;
    
    }elseif($result >=8 && $result <=10){
    
        echo "mesomorfo <br>";
        echo $result;
    
    }elseif ($result >=11 && $result <=13){
    
        echo "endomorfo <br>";
        echo $result;
    
    }
 
} 
else 
{
    echo "Preencha todos os campos!";
}
