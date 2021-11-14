<?php
session_start();
include_once './PHP/ClassUsuario.php';
include_once './PHP/conexaobd.php';
$cad = new Usuario();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include './PHP/head.php' ?>
    <link rel="stylesheet" href="./CSS/cada_biotipo.css">
    <title>GUDER SAUDE - TESTE</title>
</head>

<body id="corpo">
    <?php include './PHP/cabecalho.php' ?>
    <div class="titulo-somatotipo mt-4">
        <h1 style="color:#06396b;">
            O que são os somatótipos?
        </h1>
        <hr>
    </div>


    <div class="container">
        <div class="row">
            <div class="col " id="div-txt-imc">
                <?php $dado = $cad->txt_somatotipo(1);
                echo $dado['txt_ex']
                ?>
                <hr>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col" id="col1">
                <div class="shadow p-3 mb-5 bg-light rounded border border-primary border border-3" id="teste1">
                    <?php $dado = $cad->txt_somatotipo(1);
                    echo $dado['texto']
                    ?>
                </div>
            </div>
            <div class="col">
                <div class="" id="teste2">
                    <img src="./IMGs/ectomorfo.jpg" class="border border-success border-3" alt="" width="170px" height="120%">
                </div>
            </div>
            <div class="col" id="col1">
                <div class="shadow p-3 mb-5 bg-light rounded border border-primary border border-3" id="teste1">
                    <?php $dado = $cad->txt_somatotipo(2);
                    echo $dado['texto']
                    ?>

                </div>
            </div>
            <div class="col">
                <div class="" id="teste2">
                    <img src="./IMGs/mesomorfo.jpg" class="border border-success border-3" alt="" width="170px" height="120%">

                </div>
            </div>
            <div class="col" id="col1">
                <div class="shadow p-3 mb-5 bg-light rounded border border-primary border border-3" id="teste1">
                    <?php $dado = $cad->txt_somatotipo(3);
                    echo $dado['texto']
                    ?>

                </div>
            </div>
            <div class="col">
                <div class="" id="teste2">
                    <img src="./IMGs/endomorfo.jpg" class="border border-success border-3" alt="" width="170px" height="120%">

                </div>
            </div>
        </div>
    </div>

</body>

</html>