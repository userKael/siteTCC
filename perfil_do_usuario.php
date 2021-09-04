<?php session_start();

if (!isset($_SESSION['email'])) {
    header("location: index.php");
} else {

?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <link rel="stylesheet" href="./CSS/perfil.css">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="./JavaScript/main.js"></script>
        <script src="./JavaScript/login.js"></script>
        <link rel="stylesheet" href="./CSS/style.css">
        <link rel="stylesheet" href="./CSS/responsive.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </head>

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