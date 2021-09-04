<?php session_start();

if (!isset($_SESSION['email'])) {
    header("location: index.php");
} else {

?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <link rel="stylesheet" href="./CSS/perfil.css">

    <?php include './PHP/head.php' ?>

    <title>GUDER SAUDE - PERFIL</title>

    <body id="corpo">

        <?php include './PHP/cabecalho.php'; ?>

        <div id="div_historico">

            <div class="shadow p-3 mb-5 bg-light rounded border border-1 border-primary" id="historico_usuario">
                <h5>Histórico</h5>
                <hr>
            </div>

        </div>

        <div id="div_dados">
            <div class="shadow p-3 mb-5 bg-light rounded border border-1 border-success" id="dados_usuario">
                <img src="./IMGs/camera.png" class="rounded-circle" alt="Foto de perfil" width="70px" height="70px">



                <p><?php echo $_SESSION['nome'] ?></p>
                <hr>
                <h5>Meus dados</h5>

            </div>

        </div>
    </body>

    </html>

<?php

}
?>