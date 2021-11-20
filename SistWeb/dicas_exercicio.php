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
    <style>
        img {
            cursor: pointer;
        }
    </style>
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
                <form action="" method="post" id="form-text-explica">
                    <textarea name="txt_explica" id="" cols="150" rows="10">
                <?php $dado = $cad->txt_somatotipo(4);
                echo $dado['txt_ex']
                ?>

                </textarea>
                    <input type="hidden" name="id" value="4">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success" onclick="altera_explica()">Alterar</button>
                    </div>
                </form>
                <hr>
            </div>
        </div>
    </div>


    <div class="container" id="dicas-container">
        <div class="row row-cols-2">

            <div class="col-dicas">
                <div class="div-baixo">
                    <?php $dado1 = $cad->txt_exercicio(1); ?>
                    <img src="../Site/IMGs/<?php echo $dado1['imagem'] ?>" alt="" width="445px" height="300px" id="img1" onclick="file_img(1)">
                    <form action="" method="post" enctype="multipart/form-data" id="up_soma_img1">
                        <input type="hidden" name="id" value="1">
                        <input type="file" name="arquivo" accept="image/*" id="input-img1">
                    </form>
                    <br><br>
                    <form action="./PHP/altera_txt_exerc.php" method="post" id="form-txt-exerc1">
                        <input type="hidden" name="id" value="1">
                        <textarea name="texto" id="" cols="58" rows="10">
<?php echo $dado1['texto'] ?>
                    </textarea>
                        <div class="text-center">
                            <button type="button" class="btn btn-success" onclick="altera_txt_exerc(1),up_foto_exer(1)">Alterar</button>
                        </div>
                    </form>

                </div>
            </div>

            <div class="col-dicas">
                <div class="div-baixo">
                    <?php $dado2 = $cad->txt_exercicio(2); ?>
                    <img src="../Site/IMGs/<?php echo $dado2['imagem'] ?>" alt="" width="445px" height="300px" id="img2" onclick="file_img(2)">
                    <form action="" method="post" enctype="multipart/form-data" id="up_soma_img2">
                        <input type="hidden" name="id" value="2">
                        <input type="file" name="arquivo" accept="image/*" id="input-img2">
                    </form>
                    <br><br>
                    <form action="./PHP/altera_txt_exerc.php" method="post" id="form-txt-exerc2">
                        <input type="hidden" name="id" value="2">
                        <textarea name="texto" id="" cols="58" rows="10">
<?php echo $dado2['texto'] ?>
                    </textarea>
                        <div class="text-center">
                            <button type="button" class="btn btn-success" onclick="altera_txt_exerc(2),up_foto_exer(2)">Alterar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <div class="container" id="dicas-container">
        <div class="row row-cols-2">

            <div class="col-dicas">
                <div class="div-baixo">
                    <?php $dado3 = $cad->txt_exercicio(3); ?>
                    <img src="../Site/IMGs/<?php echo $dado3['imagem'] ?>" alt="" width="445px" height="300px" id="img3" onclick="file_img(3)">
                    <form action="" method="post" enctype="multipart/form-data" id="up_soma_img3">
                        <input type="hidden" name="id" value="3">
                        <input type="file" name="arquivo" accept="image/*" id="input-img3">
                    </form>
                    <br><br>
                    <form action="./PHP/altera_txt_exerc.php" method="post" id="form-txt-exerc3">
                        <input type="hidden" name="id" value="3">
                        <textarea name="texto" id="" cols="58" rows="10">
<?php echo $dado3['texto'] ?>
                    </textarea>
                        <div class="text-center">
                            <button type="button" class="btn btn-success" onclick="altera_txt_exerc(3),up_foto_exer(3)">Alterar</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-dicas">
                <div class="div-baixo">
                    <?php $dado4 = $cad->txt_exercicio(4); ?>
                    <img src="../Site/IMGs/<?php echo $dado4['imagem'] ?>" alt="" width="445px" height="300px" id="img4" onclick="file_img(4)">
                    <form action="" method="post" enctype="multipart/form-data" id="up_soma_img4">
                        <input type="hidden" name="id" value="4">
                        <input type="file" name="arquivo" accept="image/*" id="input-img4">
                    </form>
                    <br><br>
                    <form action="./PHP/altera_txt_exerc.php" method="post" id="form-txt-exerc4">
                        <input type="hidden" name="id" value="4">
                        <textarea name="texto" id="" cols="58" rows="10">
<?php echo $dado4['texto'] ?>
                    </textarea>
                        <div class="text-center">
                            <button type="button" class="btn btn-success" onclick="altera_txt_exerc(4),up_foto_exer(4)">Alterar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="container" id="dicas-container">
        <div class="row row-cols-2">

            <div class="col-dicas">
                <div class="div-baixo">
                    <?php $dado5 = $cad->txt_exercicio(5); ?>
                    <img src="../Site/IMGs/<?php echo $dado5['imagem'] ?>" alt="" width="445px" height="300px" id="img5" onclick="file_img(5)">
                    <form action="" method="post" enctype="multipart/form-data" id="up_soma_img5">
                        <input type="hidden" name="id" value="5">
                        <input type="file" name="arquivo" accept="image/*" id="input-img5">
                    </form>
                    <br><br>
                    <form action="./PHP/altera_txt_exerc.php" method="post" id="form-txt-exerc5">
                        <input type="hidden" name="id" value="5">
                        <textarea name="texto" id="" cols="58" rows="10">
<?php echo $dado5['texto'] ?>
                    </textarea>
                        <div class="text-center">
                            <button type="button" class="btn btn-success" onclick="altera_txt_exerc(5),up_foto_exer(5)">Alterar</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-dicas">
                <div class="div-baixo">
                    <?php $dado6 = $cad->txt_exercicio(6); ?>
                    <img src="../Site/IMGs/<?php echo $dado6['imagem'] ?>" alt="" width="445px" height="300px" id="img6" onclick="file_img(6)">
                    <form action="" method="post" enctype="multipart/form-data" id="up_soma_img6">
                        <input type="hidden" name="id" value="6">
                        <input type="file" name="arquivo" accept="image/*" id="input-img6">
                    </form>
                    <br><br>
                    <form action="./PHP/altera_txt_exerc.php" method="post" id="form-txt-exerc6">
                        <input type="hidden" name="id" value="6">
                        <textarea name="texto" id="" cols="58" rows="10">
<?php echo $dado6['texto'] ?>
                    </textarea>
                        <div class="text-center">
                            <button type="button" class="btn btn-success" onclick="altera_txt_exerc(6),up_foto_exer(6)">Alterar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>