<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/style1.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./JavaScript/main.js"></script>
    <title>Document</title>
</head>

<?php
include './PHP/conexaobd.php';
try {
    $comando = $con->prepare("SELECT * FROM text_result");
    $comando->execute();
    $linhas = $comando->rowCount();
} catch (PDOException $erro) {
    $retorno = "Erro " . $erro->getMessage();
    echo "<script> alert($retorno)</script>";
}

?>


<body id="corpo">
    <header role="navigation" class="fixed" id="cabecalho">
        <nav class="navbar navbar-light bg-light navbar-expand shadow" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./IMGs/logo.png" alt="logo" id="logo">
                </a>
                <div class="text-center">
                    <span class="navbar-brand mb-0 h1">TEXTOS</span>
                </div>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar Texto" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
    </header>

    <?php
    while ($dado = $comando->fetch(PDO::FETCH_ASSOC)) {
    ?>
        <form action="" method="post" id="form-txt">

            <div class="container" id="div-cads">
                <div class="row">
                    <div class="alert alert-success" role="alert">
                    <h4 class="text-center">ID: <?php echo $dado['id'] ?> </h4>
                    </div>   
                    <div class="col">
                        <div class="shadow p-3 mb-5 bg-light rounded" style="width: 40pc;">
                        <h4 class="text-center"> Relacionamento</h4>
                            <div class="text-center">
                                <input type="hidden" name="id" value=" <?php echo $dado['id'] ?>">
                                <textarea name="texto" cols="80" rows="10">
<?php echo $dado['texto'] ?>  
                        </textarea>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-success" onclick="altera_txt()">Alterar</button>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="shadow p-3 mb-5 bg-light rounded" style="width: 28pc;">
                        <h4 class="text-center"> Recomendações</h4>
                            <div class="text-center">
                                <input type="hidden" name="id" value=" <?php echo $dado['id'] ?>">
                                <textarea name="recomenda" cols="54" rows="10">
<?php echo $dado['recomenda'] ?>  
                        </textarea>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-success" onclick="altera_txt()">Alterar</button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>





    <?php
    }
    ?>



</body>

</html>