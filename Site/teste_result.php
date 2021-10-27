<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include './PHP/head.php';
    include_once './PHP/ClassUsuario.php';
    include_once './PHP/conexaobd.php';
    $cad = new Usuario();

    if (!isset($_SESSION['email'])) {

        header("location: index.php");
    } else if (!isset($_SESSION['imc_bd'])) {

        header("location: teste_imc.php");
    } else if (!isset($_SESSION['somatotipo'])) {

        header("location: teste_biotipo.php");
    } else {
    ?>
        <link rel="stylesheet" href="./CSS/result.css">
</head>

<body id="corpo">

    <div class="shadow-none p-3 mb-5 bg-light rounded" id="progresso-div">
        <header id="progresso-header">
            <div class="position-relative m-4">
                <div class="progress" style="height: 1px;">
                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
                <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
                <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">3</button>
            </div>
        </header>
    </div>

    <div class="titulo-somatotipo">
        <h1 style="color:#06396b ;">
            Resultado
        </h1>
        <hr>
    </div>

    <div class="container" id="div-container">
        <div class="row row-cols-2 border border-primary" id="div-result">

            <div class="col" id="div-col-1">
                <h3 class="H3-col-1">IMC: <strong> <?php echo $_SESSION['imc_bd'] ?></strong></h3>
                <h3 class="H3-col-1">Somatotipo: <strong> <?php echo $_SESSION['somatotipo'] ?></strong></h3>
                <hr style=" margin-top: 25px; margin-bottom: 30px;">
            </div>

            <div class="col" id="div-col-2">
                <div id="div-img-bio">
                    <?php
                    if ($_SESSION['somatotipo'] == "Ectomorfo") {

                    ?>
                        <img src="./IMGs/ectomorfo.jpg" id="img-bio">

                    <?php
                    } elseif ($_SESSION['somatotipo'] == "Mesomorfo") {

                    ?>
                        <img src="./IMGs/mesomorfo.jpg" id="img-bio">
                    <?php
                    } else {
                    ?>
                        <img src="./IMGs/endomorfo.jpg" id="img-bio">
                    <?php
                    }
                    ?>

                </div>
            </div>

            <div class="col" id="div-col-3">
                <div class="border border-dark" id="relaciona-result">
                    <h5>Relacionando resultados:</h5>
                    <h6>
                        <?php $dado = $cad->txt_result($_SESSION['imc'], $_SESSION['somatotipo']);
                        echo $dado['texto']

                        ?>
                    </h6>
                </div>
            </div>

            <div class="col" id="div-col-4">
                <div class="border border-dark" id="recomenda-result">
                    <h5>Recomendações:</h5>
                    <h6>
                        <?php $dado = $cad->txt_result($_SESSION['imc'], $_SESSION['somatotipo']);
                        echo $dado['recomenda']

                        ?>
                    </h6>
                </div>
            </div>
        </div>
        <form action="./perfil_do_usuario.php">
            <div class="vstack gap-2 col-md-5 mx-auto mb-4">
                <p></p>
                <button type="button" class="btn btn-success"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">MEU PERFIL</button>


                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        ...
                    </div>
                </div>
            </div>
        </form>

    </div>
</body>

</html>
<?php
    }
    unset($_SESSION['somatotipo']);
    unset($_SESSION['imc']);
    unset($_SESSION['imc_bd']);
