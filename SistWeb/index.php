<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/style.css">
    <title></title>
</head>

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
                        <h5 class="card-title">Ver cadastros</h5>
                        <p class="card-text">-Ver clientes cadastrados <br> -Excluir cadastros <br> -Adicionar cadastros <br> -Ver resultados de testes</p>
                        <div class="text-center">
                            <a href="./cadastros.php" class="btn btn-primary">VER</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">

                    <div class="card-body ">
                        <h5 class="card-title">Aterar textos do resultado</h5>
                        <p class="card-text">-Ver textos de resultados <br> - Alterar textos</p>
                        <br><br>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">VER</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Sem ideia</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>