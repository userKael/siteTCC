 <?php session_start();

if (!isset($_SESSION['email'])) {
    header("location: index.php");
} else {
    include './PHP/conexaobd.php';
    include_once './PHP/historico_user.php';
    include_once './PHP/ClassUsuario.php';
    $cad = new Usuario();

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
                <?php
                if ($results > 0) {

                ?>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <?php
                                for ($i = 0; $i < $results; $i++) {
                                    $dado2 = $teste->fetch(PDO::FETCH_ASSOC);
                                    $dado = $result->fetch(PDO::FETCH_ASSOC);
                                    $idade = $cad->idade($dado2['data_nascimento']);
                                    $data = implode("/", array_reverse(explode("-", $dado2['data_teste'])));

                                ?>
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $i + 1 ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <?php echo $i + 1 ?>º Teste
                                    </button>
                            </h2>
                            <div id="flush-collapseOne<?php echo $i + 1 ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body alert-primary">
                                    <table class="table table-bordered border-primary">
                                        <thead>
                                            <tr>
                                                <th scope="col">IMC</th>
                                                <th scope="col">Somatótipo</th>
                                                <th scope="col">Altura</th>
                                                <th scope="col">Idade</th>
                                                <th scope="col">Kg</th>
                                                <th scope="col">Sexo</th>
                                                <th scope="col">Data</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $dado['imc'] ?></td>
                                                <td><?php echo $dado['somatotipo'] ?></td>
                                                <td><?php echo $dado2['altura'] ?></td>
                                                <td><?php echo $idade ?></td>
                                                <td><?php echo $dado2['peso'] ?></td>
                                                <td><?php echo $dado2['sexo'] ?></td>
                                                <td><?php echo $data ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php
                                }
                        ?>
                        </div>
                        <form action="./teste_imc.php">
                            <div class="vstack gap-2 col-md-5 mx-auto">
                                <p></p>
                                <button type="submit" class="btn btn-outline-success">Realizar novo teste</button>
                            </div>
                        </form>
                        <form action="./PHP/imprimir.php">
                            <div class="vstack gap-2 col-md-5 mx-auto">
                                <p></p>
                                <button type="submit" class="btn btn-outline-success">Imprimir Histórico</button>
                            </div>
                        </form>
                    </div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {
                            packages: ['corechart', 'line']
                        });
                        google.charts.setOnLoadCallback(drawBasic);

                        function drawBasic() {

                            var data = new google.visualization.DataTable();
                            data.addColumn('number', 'X');
                            data.addColumn('number', 'Peso');

                            data.addRows([
                                <?php
                                for ($i = 0; $i < $results; $i++) {
                                    $dado3 = $teste2->fetch(PDO::FETCH_ASSOC);
                                ?>

                                    [<?php echo $i + 1 ?>, <?php echo $dado3['peso'] ?>],

                                <?php
                                }
                                ?>

                            ]);

                            var options = {
                                hAxis: {
                                    title: 'Nº Teste'
                                },
                                vAxis: {
                                    title: 'Peso em Kg'
                                }
                            };

                            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

                            chart.draw(data, options);
                        }
                    </script>

                    <script type="text/javascript">
                        google.charts.load('current', {
                            'packages': ['bar']
                        });
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Resultado ao longo dos testes', 'Ectomorfo', 'Mesomorfo', 'Endomorfo'],
                                ['Somatotipo', <?php echo $linhacol1  ?>, <?php echo $linhacol2 ?>, <?php echo $linhacol3 ?>],

                            ]);

                            var options = {
                                chart: {
                                    title: '',
                                    subtitle: '',
                                }
                            };

                            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                            chart.draw(data, google.charts.Bar.convertOptions(options));
                        }
                    </script>
                <?php
                } else {
                ?> <div style="margin-top: inherit;">
                        <form action="./teste_imc.php">
                            <div class="vstack gap-2 col-md-5 mx-auto">
                                <h2 class="text-center">Nenhum teste Realizado ainda!</h2>
                                <button type="submit" class="btn btn-outline-secondary">Realizar teste</button>
                            </div>
                        </form>
                    </div>
                <?php
                }
                ?>
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
        <?php
        if ($results > 0) {
        ?>
            <div class="text-center">
                <h1 style="color:#06386beb">
                    Seu peso ao longo dos testes
                </h1>
            </div>

            <div class="shadow p-3 mb-5 bg-light rounded" id="div-graficos">
                <div id="chart_div"></div>
            </div>

            <div class="text-center">
                <h1 style="color:#06386beb">
                    Somatotipos ao longo dos testes
                </h1>
            </div>

            <div class="shadow p-3 mb-5 bg-light rounded" id="div-graficos" style="height: 23pc; text-align: -webkit-center;">
                <div id="columnchart_material" style="width: 600px; height: 300px; margin-top: 20px;"></div>
            </div>


        <?php
        }
        ?>

    </body>

    </html>
<?php

}
?>