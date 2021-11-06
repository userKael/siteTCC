<?php

include './conexaobd.php';

if (
    isset($_POST["email"]) && !empty($_POST["email"])
    && isset($_POST["senha"]) && !empty($_POST["senha"])
    && isset($_POST["nome"])  && !empty($_POST["nome"])
) {

    $email = addslashes(filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL));
    $senha = addslashes(filter_input(INPUT_POST, 'senha'));
    $nome = addslashes(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING));

    $comando = $con->prepare("SELECT * FROM cadastro WHERE email= ?");
    $comando->bindParam(1, $email);
    $comando->execute();

    if ($comando->rowCount() == 0) {
        try {
            $comando = $con->prepare("INSERT INTO cadastro VALUES (?,?,?,NOW(),NOW())");
            $comando->bindParam(1, $email);
            $comando->bindParam(2, $senha);
            $comando->bindParam(3, $nome);
            $comando->execute();

            if ($comando->rowCount() > 0) {

                $email = null;
                $senha = null;
                $nome = null;
                
                $retorno = "Cadastro Realizado com Sucesso!";

            } else {
                $retorno = "falha ao cadastrar";
            }
        } catch (PDOException $erro) {
            $retorno = "Erro " . $erro->getMessage();
        }
    } 
    else 
    {
        $retorno = "Email já cadastrado";
    }
} 
else 
{
    $retorno = "Digite todos os campos";
}
echo $retorno;
