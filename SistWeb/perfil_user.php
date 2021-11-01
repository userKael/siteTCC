<?php
include './PHP/conexaobd.php';
session_start();

$email = addslashes(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

$_SESSION['email1'] = $email;
try {

    $comando = $con->prepare("SELECT * FROM img_perfil  where contato_cadastro= ?");
    $comando->bindParam(1, $email);
    $comando->execute();

    $comando2 = $con->prepare("SELECT * FROM cadastro  where email= ?");
    $comando2->bindParam(1, $email);
    $comando2->execute();
} catch (PDOException $erro) {
    $retorno = "Erro " . $erro->getMessage();
    echo $retorno;
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<?php include './PHP/head.php' ?>

<body id="corpo">
    <header role="navigation" class="fixed" id="cabecalho">
        <nav class="navbar navbar-light bg-light navbar-expand shadow" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="./index.php">
                    <img src="./IMGs/logo.png" alt="logo" id="logo">
                </a>
                <div class="text-center">
                    <span class="navbar-brand mb-0 h1">PERFIL </span>
                </div>
                <form class="d-flex" method="POST" action="" id="form-cad-busca">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="add" href="#"> <button type="button" class="btn btn-outline-success" onclick="new_cad()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                                    </svg> </button></a>

                        </li>
                    </ul>
                    <input class="form-control me-2" type="search" placeholder="Email" aria-label="Search" name="email">
                    <button class="btn btn-outline-success" type="button" onclick="consulta_cad()">Buscar</button>
                </form>
            </div>
        </nav>
    </header>
    <div id="resposta-busca" class="text-center" style="height: 60px; margin-bottom:10px;">
    </div>
    <?php
    if ($comando2->rowCount() > 0) {
        $cad = $comando2->fetch(PDO::FETCH_ASSOC);
    ?>
        <div class="col div-princ" id="divs-cads1">
            <div class="border border-success  p-3 mb-5 bg-light rounded" id="div-princ">
                <div class="container">
                    <div class="row">
                        <h4>
                            Editar Usuário: <?php echo $cad['nome'] ?>
                        </h4>
                        <hr>
                        <h6>
                            Informações básicas
                            <p></p>
                        </h6>
                        <div class="col">
                            <?php
                            if ($comando->rowCount() > 0) {
                                $img = $comando->fetch(PDO::FETCH_ASSOC);
                                echo '<div class="border border-3 border-primary rounded-3" style="width: 176px;"><img src="../Site/imagensUser/' . $img['imagem'] . '" alt="Foto de perfil" width="170px" id="img-foto"  height="170px"  onclick="arquivo_file()"> </div> ';
                            } else {
                                echo '<div class="border border-primary rounded-3" ><h1 class="text-center"> Sem foto </h1> </div>';
                            }
                            ?>
                        </div>
                        <div class="col">
                            <form action="" method="post" id="form-altera-pf">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" value="<?php echo $cad['nome'] ?>" name="nome">
                                    <label for="floatingInput">Nome</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo $cad['senha'] ?>" name="senha">
                                    <label for="floatingPassword">Senha</label>
                                </div>
                                <button type="button" class="btn btn-outline-success bt-crud" id="bt-alterar-pf" data-bs-toggle="modal" data-bs-target="#exampleModal8" onclick="altera_dados()">ALTERAR</button>
                        </div>
                        <div class="col">

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $cad['email'] ?>" name="email">
                                <label for="floatingInput">Email</label>
                            </div>
                        </div>

                        </form>

                    </div>
                </div>
                <hr class="mt-5 ">
                <h6>
                    Informações complementares
                </h6>
                <table class="table table-success table-striped mt-5">
                    <thead>
                        <tr>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <th scope="row">NÚMERO DE TESTES:</th>
                            <td>Mark</td>
                        </tr>
                        <tr>
                            <th scope="row">DATA DE CADASTRO:</th>
                            <td>Jacob</td>
                        </tr>
                    </tbody>
                </table>
                <a href="./cadastros.php"><button type="button" class="btn btn-success mt-4" style="float: left;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z" />
                        </svg>Voltar</button></a>
            </div>
        </div>

    <?php
    } else {

        echo '<h1 class="text-center">Opss... Deu algo de errado</h1>';
        echo ' <a href="./cadastros.php"><button type="button" class="btn btn-success mt-4 ms-5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z" />
    </svg>Voltar</button></a>';
    }

    ?>

</body>

</html>