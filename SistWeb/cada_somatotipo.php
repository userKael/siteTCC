<?php
session_start();
include_once '../Site/PHP/ClassUsuario.php';
include_once './PHP/conexaobd.php';
$cad = new Usuario();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include './PHP/head.php' ?>
    <link rel="stylesheet" href="../Site/CSS/cada_biotipo.css">

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
            O que são os somatótipos?
        </h1>
        <hr>
    </div>


    <div class="container">
        <div class="row">
            <div class="col " id="div-txt-imc">
                <form action="" method="post" id="form-text-explica ">
                    <textarea name="txt_explica" id="" cols="150" rows="10">
 <?php $dado = $cad->txt_somatotipo(1);
    echo $dado['txt_ex']
    ?>
                </textarea>
                    <input type="hidden" name="id" value="1">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success" onclick="altera_explica()">Alterar</button>
                    </div>
                </form>
                <hr>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col" id="col1">
                <div class="shadow p-3 mb-5 bg-light rounded border border-primary border border-3" id="teste1">
                    <form action="" method="post" id="form-txt-somatotipo1">
                        <textarea name="texto" id="" cols="79" rows="8">
<?php $dado1 = $cad->txt_somatotipo(1);
echo $dado1['texto']
?>
                    </textarea>
                        <input type="hidden" name="id" value="1">

                        <div class="text-center">
                            <button type="submit" class="btn btn-success" onclick="altera_txt_soma(1)">Alterar</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col">
                <div class="" id="teste2">
                    <img src="../Site/IMGs/<?php echo $dado1['imagem'] ?>" class="border border-success border-3 foto-soma" alt="" width="170px" height="120%" onclick="file_img(1)" id="img1">
                    <form action="" method="post" enctype="multipart/form-data" id="up_soma_img1">
                        <input type="hidden" name="id" value="1">
                        <input type="file" name="arquivo" accept="image/*" id="input-img1">
                        <button type="button" class="badge rounded-pill bg-success ms-5 mt-2" id="bt-foto" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="up_foto_soma(1)">Alterar Foto</button>
                    </form>
                </div>
            </div>

            <div class="col" id="col1">
                <div class="shadow p-3 mb-5 bg-light rounded border border-primary border border-3" id="teste1">
                    <form action="" method="post" id="form-txt-somatotipo2">
                        <textarea name="texto" id="" cols="79" rows="8">
<?php $dado2 = $cad->txt_somatotipo(2);
echo $dado2['texto']
?>
                    </textarea>
                        <input type="hidden" name="id" value="2">


                        <div class="text-center">
                            <button type="submit" class="btn btn-success" onclick="altera_txt_soma(2)">Alterar</button>

                        </div>
                    </form>

                </div>
            </div>
            <div class="col">
                <div class="" id="teste2">
                    <img src="../Site/IMGs/<?php echo $dado2['imagem'] ?>" class="border border-success border-3 foto-soma" alt="" width="170px" height="120%" onclick="file_img(2)" id="img2">
                    <form action="" method="post" enctype="multipart/form-data" id="up_soma_img2">
                        <input type="hidden" name="id" value="2">
                        <input type="file" name="arquivo" accept="image/*" id="input-img2">
                        <button type="button" class="badge rounded-pill bg-success ms-5 mt-2" id="bt-foto" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="up_foto_soma(2)">Alterar Foto</button>
                    </form>

                </div>
            </div>

            <div class="col" id="col1">
                <div class="shadow p-3 mb-5 bg-light rounded border border-primary border border-3" id="teste1">
                    <form action="" method="post" id="form-txt-somatotipo3">
                        <textarea name="texto" id="" cols="79" rows="8">
<?php $dado3 = $cad->txt_somatotipo(3);
echo $dado3['texto']
?>
                    </textarea>
                        <input type="hidden" name="id" value="3">

                        <div class="text-center">
                            <button type="submit" class="btn btn-success" onclick="altera_txt_soma(3)">Alterar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="" id="teste2">
                    <img src="../Site/IMGs/<?php echo $dado3['imagem'] ?>" class="border border-success border-3 foto-soma" alt="" width="170px" height="120%" onclick="file_img(3)" id="img3">
                    <form action="" method="post" enctype="multipart/form-data" id="up_soma_img3">
                        <input type="hidden" name="id" value="3">
                        <input type="file" name="arquivo" accept="image/*" id="input-img3">
                        <button type="button" class="badge rounded-pill bg-success ms-5 mt-2" id="bt-foto" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="up_foto_soma(3)">Alterar Foto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>