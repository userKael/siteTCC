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
        <div class="shadow p-3 mb-5 bg-light rounded">
          <?php $dado1 = $cad->txt_exercicio(1); ?>
          <img src="./IMGs/<?php echo $dado1['imagem'] ?>" alt="" width="437px" height="287px">
          <br>
          <?php echo $dado1['texto'] ?>
        </div>
      </div>

      <div class="col-dicas">
        <div class="shadow p-3 mb-5 bg-light rounded">
          <?php $dado2 = $cad->txt_exercicio(2); ?>
          <img src="./IMGs/<?php echo $dado2['imagem'] ?>" alt="" width="437px" height="287px">
          <br>
          <?php echo $dado2['texto'] ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container" id="dicas-container">

    <div class="row row-cols-2">

      <div class="col-dicas">
        <div class="shadow p-3 mb-5 bg-light rounded">
          <?php $dado3 = $cad->txt_exercicio(3); ?>
          <img src="./IMGs/<?php echo $dado3['imagem'] ?>" alt="" width="445px" height="300px">
          <br>
          <?php echo $dado3['texto'] ?>
        </div>
      </div>

      <div class="col-dicas">
        <div class="shadow p-3 mb-5 bg-light rounded">
          <?php $dado4 = $cad->txt_exercicio(4); ?>
          <img src="./IMGs/<?php echo $dado4['imagem'] ?>" alt="" width="445px" height="300px">
          <br>
          <?php echo $dado4['texto'] ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container" id="dicas-container">

    <div class="row row-cols-2">

      <div class="col-dicas">
        <div class="shadow p-3 mb-5 bg-light rounded">
          <?php $dado5 = $cad->txt_exercicio(5); ?>
          <img src="./IMGs/<?php echo $dado5['imagem'] ?>" alt="" width="445px" height="300px">
          <br>
          <?php echo $dado5['texto'] ?>
        </div>
      </div>

      <div class="col-dicas">
        <div class="shadow p-3 mb-5 bg-light rounded">
          <?php $dado6 = $cad->txt_exercicio(6); ?>
          <img src="./IMGs/<?php echo $dado6['imagem'] ?>" alt="" width="445px" height="300px">
          <br>
          <?php echo $dado6['texto'] ?>
        </div>
      </div>
    </div>
  </div>

</body>

</html>