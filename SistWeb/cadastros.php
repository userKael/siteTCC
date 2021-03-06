<!DOCTYPE html>
<html lang="pt-br">

<?php include './PHP/head.php'?>
<?php
include './PHP/conexaobd.php';
try {
    $comando = $con->prepare("SELECT * FROM cadastro LIMIT 30");
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
                <a class="navbar-brand" href="./index.php">
                    <img src="./IMGs/logo.png" alt="logo" id="logo">
                </a>
                <div class="text-center">
                    <span class="navbar-brand mb-0 h1">CADASTROS</span>
                </div>
                <form class="d-flex" method="POST" action="" id="form-cad-busca">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="add" href="#"> <button type="button" class="btn btn-outline-success" onclick="new_cad(<?php echo $linhas ?>)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                                    </svg> </button></a>

                        </li>
                    </ul>
                    <input class="form-control me-2" type="search" placeholder="Email" aria-label="Search" name="email">
                    <button class="btn btn-outline-success" type="button" onclick="consulta_cad(<?php echo $linhas ?>)">Buscar</button>
                </form>
            </div>
        </nav>
    </header>
    <div id="resposta-busca" class="text-center" style="height: 60px; margin-bottom:10px;">
    </div>
    <div class="container" id="div-cads">
        <div class="row">

            <?php
            for ($i = 0; $i < $linhas; $i++) {
                $dado = $comando->fetch(PDO::FETCH_ASSOC)
            ?>
                <div class="col" id="divs-cads<?php echo $i + 1 ?>">
                    <div class="shadow p-3 mb-5 bg-light rounded" style="width: 22pc;">
                        <h4 class="text-center"><?php echo $dado['email'] ?></h4>
                        <div class="text-center">
                        <form action="./perfil_user.php" method="post" id="form-cads<?php echo $i?>">
                            <table class="table">
                                <tbody>
                                    <tr>     
                                            <th scope="row">Nome</th>
                                            <td><input type="text" value="<?php echo $dado['nome'] ?>" name="nome" disabled></td>
                                            
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td><input type="text" value="<?php echo $dado['email'] ?>" name="email" disabled></td>
                                        <input type="hidden" name="email" value="<?php echo $dado['email'] ?>">
                                    </tr>
                                    <tr>
                                        <th scope="row">Senha</th>
                                        <td><input type="password" value="<?php echo $dado['senha'] ?>" name="senha" disabled></td>  
                                    </tr>
                                </tbody>
                            </table>
                           
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-outline-danger" onclick="apaga_dados(<?php echo $i?>)"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg></button>
                            <button type="submit" class="btn btn-success">Ver perfil</button>
                            </form>
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