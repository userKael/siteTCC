<?php

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

    if ($cad->bd_teste($data_nascimento, $altura, $peso, $sexo, $email) == true) {

        $result = $peso / ($altura * $altura);

        
    } else {
        echo "<script>alert('Ops deu algo de errado :( ');";
    }
} else {
    echo "<script>alert('Digite todos os campos');";
    echo "location.href='../teste_imc.php'</script>";
}
