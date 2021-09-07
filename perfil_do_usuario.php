<?php session_start();

if (!isset($_SESSION['email'])) {
    header("location: index.php");
} else {
    include './PHP/conexaobd.php';

    $email = $_SESSION['email'];

    $comando = $con->prepare("SELECT * FROM img_perfil WHERE contato_cadastro = ?");
    $comando->bindParam(1, $email);
    $comando->execute();
?>

    <!DOCTYPE html>
    <html lang="pt-br">
    

    <head>
        <?php include './PHP/head.php' ?>
        <title>GUDER SAUDE - PERFIL</title>
    </head>



    <body id="corpo">

        <?php include './PHP/cabecalho.php'; ?>

        <div id="div_historico">

            <div class="shadow p-3 mb-5 bg-light rounded border border-1 border-primary" id="historico_usuario">
                <h5>Histórico</h5>
                <hr>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                1º Teste
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body alert-primary">
                                Aqui ficara os Resultados e dados do 1º teste
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                2º Teste
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body alert-primary">
                                Aqui ficara os Resultados e dados do 2º teste
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                3º Teste
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body alert-primary">
                                Aqui ficara os Resultados e dados do 3º teste
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div id="div_dados">
            <div class="shadow p-3 mb-5 bg-light rounded border border-1 border-success" id="dados_usuario">

                <?php
                if ($comando->rowCount() > 0) {
                    while ($linha = $comando->fetch(PDO::FETCH_OBJ)) {
                        echo '<img src="./imagensUser/' . $linha->imagem . '"  class="rounded-circle"  alt="Foto de perfil" width="70px" id="img-foto"  height="70px"  onclick="arquivo_file()"> ';
                ?>
                        <form action="./PHP/upimg.php" method="post" enctype="multipart/form-data" id="up_perfil_img">
                            <div class="mb-3">

                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="arquivo" accept="image/*">
                                <button type="submit" class="badge rounded-pill bg-success" id="bt-foto" name="botao" value="alterar">Alterar Foto</button>
                                <button type="submit" class="badge rounded-pill bg-success" id="bt-foto" name="botao" value="apagar">Excluir Foto</button>
                            </div>

                        </form>
                    <?php
                    }
                } else {
                    ?>
                    <img src="./IMGs/camera.png" class="rounded-circle" alt="Foto de perfil" width="70px" height="70px" id="img-foto" onclick="arquivo_file()">
                    <form action="./PHP/upimg.php" method="post" enctype="multipart/form-data" id="up_perfil_img">
                        <div class="mb-3">
                            <input class="form-control form-control-sm" id="formFileSm" type="file" name="arquivo" accept="image/*">
                            <button type="submit" class="badge rounded-pill bg-success" id="bt-foto" name="botao" value="enviar">Enviar Foto</button>
                        </div>

                    </form>

                <?php
                }
                ?>

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