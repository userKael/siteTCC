<?php session_start(); ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./JavaScript/main.js"></script>
    <script src="./JavaScript/login.js"></script>
    <link rel="stylesheet" href="./CSS/estilo.css">
    <link rel="stylesheet" href="./CSS/responsive.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>GUDER SAUDE - TESTE</title>
</head>

<body id="corpo">

<?php  include './PHP/cabecalho.php';?>


    <div id="titulo">
        <h1 class="text-center">Você Realmente se Conhece?</h1>
        <div id="div-txt-intro">
            <div class="shadow p-3 mb-5 bg-light border-2 border border-success" style="border-radius: 1.5rem;">
                <h5 id="txt-intro">
                    Texto introdutivo sobre a proposta do site///
                </h5>
                <p id="txt-intro">
                    Sabe quando você para e pensa "Cara, porque eu engordo quando como uma bala, e meu primo Zezinho come um bolo inteiro e não muda" <br> é, o Zezinho pode ter um somatotipo atual de um ectomorfo, e você um azarado endomorfo, mas... O
                    que isso tem a ver com a minha bala? Para sua resposta, que tal de iniciar nosso teste, é rápido e muito fácil, ao seu término poderemos responder sua pergunta, e claro a do Zezinho também :)<br> Além de saber a resposta, você saberá
                    um pouco mais sobre seu corpo, pois mais conhecimento sempre é bom ;)
                </p>
            </div>
        </div>

        <div class="text-center">

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


            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">

                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="div-login">
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


</body>

</html>