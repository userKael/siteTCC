<?php session_start();

if (!isset($_SESSION['email'])) {
    header("location: index.php");
} else {
    include './PHP/conexaobd.php';

    $email = $_SESSION['email'];

    $comando = $con->prepare("SELECT * FROM img_perfil WHERE contato_cadastro = ?");
    $comando->bindParam(1,$email);
    $comando->execute();
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


            <?php 
              if($comando->rowCount() >0){
                while($linha = $comando->fetch(PDO::FETCH_OBJ)){
                    echo '<img src="./imagensUser/' . $linha->imagem . '"  class="rounded-circle"  alt="Foto de perfil" width="70px" id="img-foto"  height="70px"  onclick="arquivo_file()"> ';
                   
                }
            }else{
                ?>
                 <img src="./IMGs/camera.png" class="rounded-circle" alt="Foto de perfil" width="70px" height="70px" id="img-foto" onclick="arquivo_file()">

                <?php
            }
            ?>

                <form action="./PHP/upimg.php" method="post" enctype="multipart/form-data" id="up_perfil_img">
                <div class="mb-3">

                    <input class="form-control form-control-sm" id="formFileSm" type="file" name="arquivo" accept="image/*">
                    <button type="submit" class="badge rounded-pill bg-success" id="bt-foto">Enviar Foto</button>
                </div>

                </form>


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