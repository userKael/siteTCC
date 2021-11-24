<?php
include_once '../Site/PHP/ClassUsuario.php';
include_once './PHP/conexaobd.php';
$cad = new Usuario();
?>

<!DOCTYPE html>
<html lang="pt-br">
<?php include './PHP/head.php' ?>
<link rel="stylesheet" href="../Site/CSS/teste.css">

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
    <div class="titulo-somatotipo">
        <h1 style="color:#06396b ;">
            Teste de IMC
        </h1>
        <hr>
    </div>


    <div class="container">
        <div class="row">
            <div class="col " id="div-txt-imc">
                <form action="" method="post" id="form-text-explica5">
                    <input type="hidden" name="id" value="5">
                    <textarea name="txt_explica" id="" cols="160" rows="10">
                <?php $dado = $cad->txt_somatotipo(5);
                echo $dado['txt_ex']
                ?>
                </textarea>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success" onclick="altera_explica2(5)">Alterar</button>
                    </div>
                </form>
                <hr class="mb-5">

            </div>
        </div>
    </div>

    <div class="titulo-somatotipo mt-5">
        <h1 style="color:#06396b ;">
            Teste de Somatotipo
        </h1>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col " id="div-txt-ex">

                <form action="" method="post" id="form-text-explica6">
                    <input type="hidden" name="id" value="6">
                    <textarea name="txt_explica" id="" cols="70" rows="10">
                <?php $dado1 = $cad->txt_somatotipo(6);
                echo $dado1['txt_ex']
                ?>

                </textarea>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success" onclick="altera_explica2(6)">Alterar</button>
                    </div>
                </form>
                <hr>

            </div>
            <div class="col  ">
                <img src="https://pratofitness.blog/wp-content/uploads/2019/03/teste-do-pulso-1200x580.png?189db0&189db0" alt="" style="width: inherit;">
            </div>
        </div>
    </div>
</body>

</html>