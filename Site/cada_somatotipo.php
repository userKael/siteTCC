<?php session_start() ?>

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

                <h5>
                    Diferente de biotipo que está relacionado a genética da pessoa e acaba sendo imutável, os somatótipos são o estado atual de cada corpo e que pode ser mudado com treinamento e dieta correta.
                    <br>
                    O termo somatótipo criado por Sheldon, em 1940, se refere a classificação física do corpo humano, que pode ser aplicada tanto para homens quanto para mulheres, sendo divido em 3 tipos: Ectomorfo, Mesomorfo e Endomorfo e é através deles que podemos dizer como o nosso corpo está atualmente.

                </h5>

                <hr>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col" id="col1">
                <div class="shadow p-3 mb-5 bg-light rounded border border-primary border border-3" id="teste1">
                    <h1>Ectomorfo</h1>
                    <br>
                    <h5>
                        Pessoas com o somatótipo ectomorfo geralmente apresentam um corpo mais magro, com ombros estreitos e membros compridos, além do seu metabolismo rápido que faz com que eles tenham a capacidade de perder peso muito facilmente e ter dificuldade em ganhar.
                    </h5>

                </div>
            </div>
            <div class="col">
                <div class="" id="teste2">
                    <img src="./IMGs/ectomorfo.jpg" class="border border-success border-3" alt="" width="170px" height="120%">
                </div>
            </div>
            <div class="col" id="col1">
                <div class="shadow p-3 mb-5 bg-light rounded border border-primary border border-3" id="teste1">
                    <h1>Mesomorfo</h1>
                    <br>
                    <h5>
                        Corpos mesomorfos são caracterizados por um padrão de corpo onde a pessoa naturalmente é magra porém com mais músculos, além de membros superiores mais desenvolvidos. Pessoas com o corpo mesomorfo também tem facilidade em ganho de massa muscular.
                    </h5>

                </div>
            </div>
            <div class="col">
                <div class="" id="teste2">
                    <img src="./IMGs/mesomorfo.jpg" class="border border-success border-3" alt="" width="170px" height="120%">

                </div>
            </div>
            <div class="col" id="col1">
                <div class="shadow p-3 mb-5 bg-light rounded border border-primary border border-3" id="teste1">
                    <h1>Endomorfo</h1>
                    <br>
                    <h5>
                        O somatótipo endomorfo é caracterizado por um corpo mais largo e arredondado, com maior quantidade de gordura acumulada e metabolismo lento, além disso pessoas com o corpo endomorfo tem uma grande dificuldade em perder peso.
    <br><br>
                    </h5>

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