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
                                    Então vamos aprender!
                                </h2>
                                <h4>
                                    <br>
                                    Você conhece o termo somatotipo? <br><br>
                                    &emsp; Muito confundido com o biotipo, possuem definições diferentes, enquanto o biotipo se refere ao estado natural (genótipo) e não pode ser alterado, o somatotipo diz respeito a classificação corporal na qual pode ser alterado com o passar do tempo.
                                    <br><br>
                                    &emsp; Sabendo disso, que tal descobrirmos qual é a sua classificação corporal, e como ela está relacionada com seu Índice de Massa Corporal (IMC).
                                    <br><br>
                                    &emsp; O que?! Você não sabe o que IMC? Clique em iniciar teste para descobrir como tudo isso está relacionado a sua saúde e bem-estar.
                                </h4>

                                <img src="./IMGs/seta2.png" alt="" width="50" id="seta2">

                            </div>

                            <div class="text-center me-5 mt-4" style="margin-top: -1.4rem!important;">

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
                        <img src="./IMGs/imagemindex.png" class="img-fluid" alt="..." width="347" id="imagem-index">

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
                    <a class="nav-link" href="./sobre_nos.php">Sobre nós</a>
                </div>
            </nav>
        </footer>
    </div>


</body>

</html>