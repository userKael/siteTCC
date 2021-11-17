<?php
session_start();
include_once './PHP/ClassUsuario.php';
include_once './PHP/conexaobd.php';
$cad = new Usuario();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include './PHP/head.php'; ?>

  <link rel="stylesheet" href="./CSS/dicas.css">
  <title>Document</title>
</head>

<body id="corpo-dicas">
  <?php include './PHP/cabecalho.php' ?>
  <div class="titulo-somatotipo mt-4">
    <h1 style="color:#06396b;">
      Exercício para cada somatotipo
    </h1>
    <hr>
  </div>


  <div class="container">
    <div class="row">
      <div class="col " id="div-txt-imc">
        <?php $dado = $cad->txt_somatotipo(4);
        echo $dado['txt_ex']
        ?>
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

    <div class="row row-cols-2 continue">

      <div class="col-dicas">
        <div class="div-cima">
          imagem
        </div>
      </div>

      <div class="col-dicas">
        <div class="div-cima">
          imagem
        </div>
      </div>

      <div class="col-dicas">
        <div class="div-baixo">
          Texto sobre o exercício
        </div>
      </div>

      <div class="col-dicas">
        <div class="div-baixo">
          Texto sobre o exercício
        </div>
      </div>

    </div>

    <div class="row row-cols-2 continue">

      <div class="col-dicas">
        <div class="div-cima">
          imagem
        </div>
      </div>

      <div class="col-dicas">
        <div class="div-cima">
          imagem
        </div>
      </div>

      <div class="col-dicas">
        <div class="div-baixo">
          Texto sobre o exercício
        </div>
      </div>

      <div class="col-dicas">
        <div class="div-baixo">
          Texto sobre o exercício
        </div>
      </div>
    </div>

    <div class="row row-cols-2 continue">

      <div class="col-dicas">
        <div class="div-cima">
          imagem
        </div>
      </div>

      <div class="col-dicas">
        <div class="div-cima">
          imagem
        </div>
      </div>

      <div class="col-dicas">
        <div class="div-baixo">
          Texto sobre o exercício
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