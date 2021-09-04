<?php
session_start();
include './conexaobd.php';

$email = $_SESSION['email'];

$arquivoAtual = $_FILES['arquivo']['name'];
$arquivoTemp = $_FILES['arquivo']['tmp_name'];
$destino = '../imagensUser/' . $arquivoAtual;

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
