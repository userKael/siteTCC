<?php
session_start();
include_once '../Site/PHP/ClassUsuario.php';
include_once './PHP/conexaobd.php';
$cad = new Usuario();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include './PHP/head.php'; ?>

    <link rel="stylesheet" href="../site/CSS/dicas.css">
    <title>Document</title>
</head>

<body id="corpo">
    <header role="navigation" class="fixed" id="cabecalho">
        <nav class="navbar navbar-light bg-light navbar-expand shadow" id="navbar">
            <a href="./conteudo.php">
                <button type="button" class="btn btn-outline-success ms-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z" />
                    </svg>
                </button>
            </a>
            <div class="container" style="justify-content: center;">
                <a class="navbar-brand" href="#">
                    <img src="./IMGs/logo.png" alt="logo" id="logo">
                </a>
            </div>
        </nav>
    </header>
    <div class="titulo-somatotipo mt-4">
        <h1 style="color:#06396b;">
            Exercício para cada somatotipo
        </h1>
        <hr>
    </div>


    <div class="container">
        <div class="row">
            <div class="col " id="div-txt-imc">
                <form action="" method="post">
                    <textarea name="" id="" cols="150" rows="10">
                <?php $dado = $cad->txt_somatotipo(4);
                echo $dado['txt_ex']
                ?>
 <p>
     Vamos entender um pouco sobre alguns exercícios e suas vantagens para o nosso corpo?
 </p>
 <p>
     Primeiramente sabemos que a base da nossa saúde é manter a rotina de exercícios ativa, nosso corpo depende disso em algum mento.
 </p>
 <p>
     Para a gente ter uma ideia de o quão é bom atividades físicas, além de prevenir doenças físicas como níveis de colesterol, diabetes hipertensão etc. Como também pode prevenir de doenças psicológicas igual a depressão e ansiedade.
 </p>
 <p>
     Você pode conferir algumas delas aqui!
 </p>

                </textarea>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Alterar</button>
                    </div>

                </form>
                <hr>
            </div>
        </div>
    </div>


    <div class="container" id="dicas-container">
        <div class="row row-cols-2">

            <div class="col-dicas">
                <img src="https://wl-incrivel.cf.tsp.li/resize/728x/jpg/6e2/741/85b19e548b84d269eab2163e2a.jpg" alt="" width="100%">
            </div>

            <div class="col-dicas">
                <div class="div-cima">
                    imagem
                </div>
            </div>

            <div class="col-dicas">
                <div class="div-baixo">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, eum quaerat ullam modi distinctio, totam facilis velit, ad quae magnam id quidem pariatur voluptates soluta? Quasi distinctio accusamus et nulla.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, similique porro. Est dignissimos iure nulla, rerum, ipsum esse obcaecati nihil vitae necessitatibus laborum numquam sapiente asperiores iusto laboriosam nisi aliquam!
                </div>
            </div>

            <div class="col-dicas">
                <div class="div-baixo">
                    Texto sobre o exercício
                </div>
            </div>

        </div>






    </div>
</body>

</html>