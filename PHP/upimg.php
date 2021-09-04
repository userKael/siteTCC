<?php
session_start();
include './conexaobd.php';

$email = $_SESSION['email'];

$arquivoAtual = $_FILES['arquivo']['name'];
$arquivoTemp = $_FILES['arquivo']['tmp_name'];
$destino = '../imagensUser/' . $arquivoAtual;
$botao = $_POST['botao'];

if ($botao == "enviar") {
    try {
        $comando = $con->prepare("INSERT INTO img_perfil VALUES (null,?,?)");
        $comando->bindParam(1, $arquivoAtual);
        $comando->bindParam(2, $email);
        $comando->execute();

        if ($comando->rowCount() > 0) {
            move_uploaded_file($arquivoTemp, $destino);
            echo "<script>alert('Imagem Cadastrada :)');";
            echo "location.href='../perfil_do_usuario.php'</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar a imagem :( ');";
            echo "location.href='../perfil_do_usuario.php'</script>";
        }
    } catch (PDOException) {

        echo "<script>alert('Erro ao cadastrar a imagem :( ');";
        echo "location.href='../perfil_do_usuario.php'</script>";
    }
}

if ($botao == "alterar") {

    $comando = $con->prepare("SELECT imagem FROM img_perfil WHERE contato_cadastro = ?");
    $comando->bindParam(1, $email);
    $comando->execute();
    $dado = $comando->fetch();
    $imagem = $dado['imagem'];

    unlink('C:/xampp/htdocs/siteTCC/imagensUser/' . $imagem);

    $comando = $con->prepare("UPDATE img_perfil SET imagem=?  WHERE contato_cadastro = ?");
    $comando->bindParam(1, $arquivoAtual);
    $comando->bindParam(2, $email);
    $comando->execute();
    move_uploaded_file($arquivoTemp, $destino);

    echo "<script>alert('Imagem Alterada :)');";
    echo "location.href='../perfil_do_usuario.php'</script>";
}

if ($botao == "apagar") {

    $comando = $con->prepare("SELECT imagem FROM img_perfil WHERE contato_cadastro = ?");
    $comando->bindParam(1, $email);
    $comando->execute();
    $dado = $comando->fetch();
    $imagem = $dado['imagem'];

    unlink('C:/xampp/htdocs/siteTCC/imagensUser/' . $imagem);

    $comando = $con->prepare("DELETE FROM img_perfil WHERE contato_cadastro = ?");
    $comando->bindParam(1, $email);
    $comando->execute();
    echo "<script>alert('Imagem Excluida com sucesso:)');";
    echo "location.href='../perfil_do_usuario.php'</script>";
}
