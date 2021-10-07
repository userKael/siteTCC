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
                    <div class="col-md-8" id="titulo">
                        <h1 class="mt-4">
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
                                <h3>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nulla consequuntur, cupiditate et ipsum illo laudantium reiciendis corrupti doloribus aperiam doloremque repellat aspernatur enim fugiat neque quod odio molestiae dolore!
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, dignissimos totam. Vero, expedita quos quibusdam error recusandae molestiae ullam architecto aut, at aspernatur ad ducimus! Quo minima dolorem corporis quis?$_COOKIEr
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque sunt unde cumque consequuntur quos, ipsa ea atque recusandae nihil molestiae veniam expedita, quae maxime quod accusamus rem, corrupti sit totam.

                                </h3>

                            </div>


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

            <footer id="rodape">
                <nav class="navbar bottom navbar-light bg-light">
                    <div class="container-fluid">
                        <p style="padding-top: 10px;">© 2021 Guder Saúde - Todos os direitos reservados</p>
                        <a class="nav-link" href="./documentacao.php">Documentação</a>
                    </div>
                </nav>
            </footer>
   

    </section>
    </div>



























</body>

</html>