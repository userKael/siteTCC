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
                        <form action="" method="post" enctype="multipart/form-data" id="up_perfil_img">
                            <div class="mb-3">

                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="arquivo" accept="image/*">

                                <button type="button" class="badge rounded-pill bg-success" id="bt-foto" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="alter_foto()">Alterar Foto</button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <img src="./IMGs/logo.png" class="rounded me-2" alt="logo" width="30%">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center" id="resposta-img">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="badge rounded-pill bg-success" id="bt-foto" data-bs-toggle="modal" data-bs-target="#exampleModal1" onclick="del_foto(),time(7000)">Excluir Foto</button>
                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <img src="./IMGs/logo.png" class="rounded me-2" alt="logo" width="30%">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="time(10)"></button>
                                            </div>
                                            <div class="modal-body text-center" id="resposta-img2">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </form>
                    <?php
                    }
                } else {
                    ?>
                    <img src="./IMGs/camera.png" class="rounded-circle" alt="Foto de perfil" width="70px" height="70px" id="img-foto" onclick="arquivo_file()">
                    <form action="" method="post" enctype="multipart/form-data" id="up_perfil_img">
                        <div class="mb-3">
                            <input class="form-control form-control-sm" id="formFileSm" type="file" name="arquivo" accept="image/*">
                            <button type="button" class="badge rounded-pill bg-success" id="bt-foto" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="up_foto(),time(7000)">Enviar Foto</button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <img src="./IMGs/logo.png" class="rounded me-2" alt="logo" width="30%">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="time(10)"></button>
                                        </div>
                                        <div class="modal-body text-center" id="resposta-img">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                <?php
                }
                ?>

                <hr>
                <h5>Meus dados</h5>

                <form action="" method="post" id="form-altera">
                    <div class="dados">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $_SESSION['nome'] ?>" name="nome">
                            <label for="floatingInput">Nome</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $_SESSION['email'] ?>" name="email">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $_SESSION['senha'] ?>" name="senha">
                            <label for="floatingPassword">Senha</label>
                        </div>

                    </div>
                    <div class="dados">
                        <button type="button" class="btn btn-outline-success bt-crud" id="bt-alterar" data-bs-toggle="modal" data-bs-target="#exampleModal8" onclick="altera_dados()">ALTERAR</button>

                        <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <img src="./IMGs/logo.png" class="rounded me-2" alt="logo" width="30%">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="time(10)"></button>
                                    </div>
                                    <div class="modal-body text-center" id="resposta-altera">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <button type="button" class="btn btn-outline-danger bt-crud" data-bs-toggle="modal" data-bs-target="#exampleModal9"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg></button>

                        <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <img src="./IMGs/logo.png" class="rounded me-2" alt="logo" width="30%">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center alert alert-danger" id="resposta-altera" style="margin-bottom: 0px">
                                        DELETAR PERFIL E HISTÓRICO DE TESTES?

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                                        <form action="" method="post" id="form-deleta">

                                            <button type="button" class="btn btn-primary" onclick="apaga_dados()">Sim</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>

    </html>
<?php

}
?>