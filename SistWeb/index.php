<!DOCTYPE html>
<html lang="pt-br">

<?php include './PHP/head.php'?>
<body id="corpo">
    <header role="navigation" class="fixed" id="cabecalho">
        <nav class="navbar navbar-light bg-light navbar-expand shadow" id="navbar">
            <div class="container" style="justify-content: center;">
                <a class="navbar-brand" href="#">
                    <img src="./IMGs/logo.png" alt="logo" id="logo">
                </a>
            </div>
        </nav>
    </header>

    <div class="container" id="escolha">
        <div class="row align-items-center">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Cadastros</h5>
                        <p class="card-text">- Ver clientes cadastrados <br> - Excluir cadastros <br> - Adicionar cadastros <br> - Ver resultados de testes</p>
                        <div class="text-center">
                            <a href="./cadastros.php" class="btn btn-primary">VER</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body ">
                        <h5 class="card-title">Textos do resultado</h5>
                        <p class="card-text">- Ver textos de resultados <br> - Alterar textos <br> - Alterar recomendações</p>
                        <br>
                        <div class="text-center">
                            <a href="./textos.php" class="btn btn-primary">VER</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Conteúdo</h5>
                        <p class="card-text">-Ver e alterar dicas de exercícios <br> -Ver e alterar Sobre cada somatotipo <br> <br></p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">VER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>