<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Document</title>
</head>


<?php
include './PHP/conexaobd.php';
try {
    $comando = $con->prepare("SELECT * FROM cadastro");
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
                    <span class="navbar-brand mb-0 h1">CADASTROS</span>
                </div>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Email" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
    </header>


    <div class="container" id="div-cads">
        <div class="row">
            <?php
            while ($dado = $comando->fetch(PDO::FETCH_ASSOC)) {

            ?>
                <div class="col">
                    <div class="shadow p-3 mb-5 bg-light rounded">
                        <h4 class="text-center"><?php ?></h4>
                        <div class="text-center">
                            <table class="table">

                                <tbody>
                                    <tr>
                                        <th scope="row">Nome</th>
                                        <td><input type="text" value="<?php echo $dado['nome'] ?>"></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td><input type="text" value="<?php echo $dado['email'] ?>"></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Senha</th>
                                        <td><input type="password" value="<?php echo $dado['senha'] ?>"></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <div class="text-center">
                            <button name="altdel" type="submit" class="btn btn-outline-danger" value="APAGAR"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg></button>
                            <button type="button" class="btn btn-success">Ver perfil</button>
                        </div>


                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>

</body>

</html>