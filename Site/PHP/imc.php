<?php

session_start();

if (
    isset($_POST["data_nascimento"]) && !empty($_POST["data_nascimento"])
    && isset($_POST["altura"]) && !empty($_POST["altura"])
    && isset($_POST["peso"]) && !empty($_POST["peso"])
    && isset($_POST["sexo"]) && !empty($_POST["sexo"])
    && isset($_POST["rotina_exercicios"]) && !empty($_POST["rotina_exercicios"])
) {

    include './conexaobd.php';
    include './ClassUsuario.php';
    include './ClassIMC.php';

    $email = $_SESSION['email'];
    $cad = new Usuario();
    $imc = new cla_imc();

    $data_nascimento = addslashes(filter_input(INPUT_POST, 'data_nascimento'));
    $altura = addslashes(filter_input(INPUT_POST, 'altura'));
    $peso = addslashes(filter_input(INPUT_POST, 'peso'));
    $sexo = addslashes(filter_input(INPUT_POST, 'sexo'));
    $rotina_exer = addslashes(filter_input(INPUT_POST, 'rotina_exercicios'));
    $idade = $cad->idade($data_nascimento);

    if($altura <= 2.40)
    {
        if ($peso < 299)
        {
            if ($idade < 12 or $idade > 120 ) 
            {
                echo "A idade mínima é de 12 anos e máxima de 119!";
            } 
            elseif ($cad->bd_teste($data_nascimento, $altura, $peso, $sexo, $email) == true) 
            {
                $result = $peso / ($altura * $altura);
                
                if($idade>=12 && $idade<=13)
                {
                    $_SESSION['imc_bd'] = substr($result, 0, 4)  . " kgm². <br>" ." ". $imc->imc1($result,$sexo);
                    $_SESSION['imc'] = $imc->imc1($result,$sexo);
                    echo "feito";
                }
                elseif($idade>=14 && $idade<=15)
                {
                    $_SESSION['imc_bd'] = substr($result, 0, 4)  . " kgm². <br>" ." ". $imc->im2($result,$sexo);
                    $_SESSION['imc'] =  $imc->im2($result,$sexo);
                    echo "feito";
                }
                elseif($idade>=16 && $idade<= 64)
                {
                    $_SESSION['imc_bd'] = substr($result, 0, 4)  . " kgm². <br>" ." ". $imc->im3($result,$rotina_exer);
                    $_SESSION['imc'] = $imc->im3($result,$rotina_exer);
                    echo "feito";
                }
                elseif($idade>65)
                {
                    $_SESSION['imc_bd'] = substr($result, 0, 4)  . " kgm². <br>" ." ". $imc->im4($result,$rotina_exer);
                    $_SESSION['imc'] =  $imc->im4($result,$rotina_exer);
                    echo "feito";
                }
            } 
            else 
            {
                echo "Deu algo de errado";
            }
        }
        else 
        {
            echo "O peso deve ser menor que 300kg";
        }

    }else
    {
        echo "Altura máxima é de 2.40m";
    }
} 
else 
{
    echo "Preencha todos os campos!";
}
