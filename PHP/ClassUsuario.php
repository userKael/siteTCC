<?php
session_start();

class Usuario
{


    public function login($email, $senha)
    {

        global $con;

        $comando = $con->prepare("SELECT * FROM cadastro WHERE email = ? AND senha = ?");
        $comando->bindParam(1, $email);
        $comando->bindParam(2, $senha);
        $comando->execute();

        if ($comando->rowCount() > 0) {
            $dado = $comando->fetch();
            $dado['email'];
            $_SESSION['email'] = $dado['email'];

            return true;
        } else {
            return false;
        }
    }
    

    public function teste($data_nascimento, $altura, $peso, $sexo, $email)
    {

        global $con;
        try {
            $comando = $con->prepare("INSERT INTO teste VALUES (null,?,?,?,?,curdate(),?)");

            $comando->bindParam(1, $peso);
            $comando->bindParam(2, $altura);
            $comando->bindParam(3, $data_nascimento);
            $comando->bindParam(4, $sexo);
            $comando->bindParam(5, $email);
            $comando->execute();

            if ($comando->rowCount() > 0) {

                return true;
            } else {
                return false;
            }
        } catch (PDOException $erro) {
            $retorno = "Erro " . $erro->getMessage();
            return $retorno;
        }
    }


    public function idade($data_nascimento)
    {
        list($ano, $mes, $dia) = explode('-', $data_nascimento);
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

        $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);

        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
        
        return $idade;
    }
}
