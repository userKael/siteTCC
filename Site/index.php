<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include './PHP/head.php' ?>
    <title>GUDER SAUDE - TESTE</title>

</head>

<body id="corpo">
    <div id="principais">

        <section>
            <?php include './PHP/cabecalho.php'; ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="mt-4" id="titulo">
                            VOCÊ <br> REALMENTE <br> SE <br> CONHECE?
                        </h1>

                    </div>
                    <div class="col-6 col-md-4" id="div-seta">
                        <img src="./IMGs/SetaParaBaixo.png" alt="" width="250" id="img-seta">

                    </div>
                </div>
        </section>

        <section>
            <div class="container" id="container-intro">
                <div class="row">
                    <div class="col-6" id="div-intro">
                        <div class="" id="div-txt-intro">
                            <div id="txt-conteudo">
                                <h2>
                                    Texto Intodutivo
                                </h2>
                                <h3>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, cupiditate vero! Dolore, ut corrupti? Soluta, eaque! Neque at, voluptate illum ipsam fugit obcaecati fuga odit itaque velit in nisi saepe.
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero fugiat quidem temporibus dolor veniam nisi unde nostrum id ex. Magni amet repudiandae sequi rem. Quo quia voluptate totam suscipit corporis?
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium, quidem commodi tempora ab ratione impedit aspernatur libero ducimus alias. Reprehenderit debitis dolorem tempore consectetur quam nulla eveniet libero ut corporis?
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea eveniet velit iure deleniti illum, consectetur qui aliquam maxime, dolorem dolorum perferendis! Cupiditate, sunt enim? Vel fugiat illo eius est necessitatibus!


                                </h3>

                            </div>

                            <div class="text-center me-5">
                                <?php
                                if (!isset($_SESSION['email'])) {

                                ?>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" id="bt-inicio" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Iniciar teste</button>

                                <?php
                                } else {

                                ?>
                                    <a href="./teste_imc.php"><button class="btn btn-primary" type="button" id="bt-inicio">Iniciar teste</button></a>

                                <?php

                                }
                                ?>

                            </div>



                        </div>

                    </div>
                    <div class="col-6">
                        <img src="./IMGs/imagem_index.png" class="img-fluid" alt="..." width="440" id="imagem-index">

                    </div>
                </div>

            </div>



            <div class="text-center">


                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="logo-position">
                            <img src="./IMGs/logo.png" alt="logo" id="logo-login">
                        </div>
                        <div id="input-label">
                            <form action="" method="POST" id="logar">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="Email@exemple.com" name="email">
                                    <label for="email">Email</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
                                    <label for="senha">Senha</label>
                                </div>
                                <p class="text-center" id="txt-cad">
                                    Ei! É novo aqui? <a href="./cadastro.html"> Cadastre-se</a>
                                </p>

                                <div class="text-center" id="bt-position">
                                    <button type="button" id="bt-entrar" class="btn btn-primary" onclick="login2()">ENTRAR</button>
                                    <p style="color: red; margin-top: 20px;" id="resposta-login" class="text-center">

                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <footer id="rodape">
            <nav class="navbar bottom navbar-light bg-light">
                <div class="container-fluid">
                    <p style="padding-top: 10px;">© 2021 Guder Saúde - Todos os direitos reservados</p>
                    <a class="nav-link" href="./documentacao.php">Documentação</a>
                </div>
            </nav>
        </footer>
    </div>



























</body>

</html>