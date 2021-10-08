<?php
session_start();
include './conexaobd.php';

if (
    isset($_POST["email"]) && !empty($_POST["email"])
    && isset($_POST["senha"]) && !empty($_POST["senha"])
    && isset($_POST["nome"]) && !empty($_POST["nome"])
) {

    $emailn = addslashes(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $senha = addslashes(filter_input(INPUT_POST, 'senha'));
    $nome = addslashes(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING));
    $email = $_SESSION['email'];

    $comando = $con->prepare("SELECT * FROM cadastro WHERE email= ?");
    $comando->bindParam(1, $email);
    $comando->execute();

    if ($comando->rowCount() == 0) {
        try {

            $comando4 = $con->prepare("UPDATE cadastro SET email =?, senha =?, nome = ? WHERE email =?");
            $comando4->bindParam(1, $emailn);
            $comando4->bindParam(2, $senha);
            $comando4->bindParam(3, $nome);
            $comando4->bindParam(4, $email);
            $comando4->execute();

            if ($comando4->rowCount() > 0) {

                $_SESSION['email'] = $emailn;
                $_SESSION['nome'] = $nome;
                $_SESSION['senha'] = $senha;
                $retorno = "Cadastro alterado com Sucesso!";
            } 
            else 
            {
                $retorno = "Erro ao alterar cadastro !";
            }
        } 
        catch (PDOException $erro) 
        {
            $retorno = "Erro " . $erro->getMessage();
        }
    } 
    else 
    {
        $retorno = "Email Já Existente, Tente Outro.";
    }
} 
else 
{
    $retorno = "Digite todos os campos";
}
echo $retorno;
