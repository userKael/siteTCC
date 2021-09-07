<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include './PHP/head.php' ?>
    <title> Guder Saúde - Login</title>
</head>

<body class="gradiente">
    <div class="div-login">
        <div class="shadow p-3 mb-5 bg-light  border border-primary rounded-3" id="div-login-bot">
            <div class="logo-position">
                <img src="./IMGs/logo.png" alt="logo" class="logo-cad ">
            </div>
            <div id="input-label">
                <form action="" method="post" id="logar">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Email@exemple.com" name="email">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" name="senha">
                        <label for="floatingPassword">Senha</label>
                    </div>

                    <p class="text-center" id="txt-cad">
                        Ei! É novo aqui? <a href="./cadastro.html"> Cadastre-se</a>
                    </p>

                    <div class="text-center" id="bt-position">
                        <button type="button" id="bt-entrar" class="btn btn-primary" onclick="login()">ENTRAR</button>
                        <p style="color: red; margin-top: 20px;" id="resposta-login" class="text-center">

                        </p>
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>

</html>