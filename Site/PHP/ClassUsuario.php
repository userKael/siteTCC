<?php


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
            $_SESSION['email'] = $dado['email'];
            $_SESSION['senha'] = $dado['senha'];
            $_SESSION['nome'] = $dado['nome'];

            return true;
        } else {
            return false;
        }
    }
    

    public function bd_teste($data_nascimento, $altura, $peso, $sexo, $email)
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


    public function bd_result($somatotipo, $email, $imc){
        global $con;
        try {
            $comando = $con->prepare("INSERT INTO result_teste VALUES (null,?,?,?)");

            $comando->bindParam(1,$imc);
            $comando->bindParam(2,$somatotipo);
            $comando->bindParam(3,$email);
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

    public function txt_result($imc,$somatotipo){

        global $con;
        $retorno = "";

        if($imc == "Está abaixo do peso ideal." && $somatotipo =="Ectomorfo")
        {

            try {
                $comando = $con->prepare("SELECT texto FROM text_result WHERE id = 1");
                $comando->execute();
                $dado = $comando->fetch();
    
                $retorno = $dado['texto'];


            } catch (PDOException $erro) {
                $retorno = "Erro " . $erro->getMessage();
                return $retorno;
            }

        }
        elseif($imc == "Está no peso ideal." && $somatotipo =="Ectomorfo")
        {
            try {
                $comando = $con->prepare("SELECT texto FROM text_result WHERE id = 2");
                $comando->execute();
                $dado = $comando->fetch();
    
                $retorno = $dado['texto'];


            } catch (PDOException $erro) {
                $retorno = "Erro " . $erro->getMessage();
                return $retorno;
            }

        }
        elseif($imc == "Está acima do peso ideal." && $somatotipo =="Ectomorfo")
        {
            try {
                $comando = $con->prepare("SELECT texto FROM text_result WHERE id = 3");
                $comando->execute();
                $dado = $comando->fetch();
    
                $retorno = $dado['texto'];


            } catch (PDOException $erro) {
                $retorno = "Erro " . $erro->getMessage();
                return $retorno;
            }

        }
        elseif($imc == "Está no estágio da obesidade." && $somatotipo =="Ectomorfo")
        {
            try {
                $comando = $con->prepare("SELECT texto FROM text_result WHERE id = 4");
                $comando->execute();
                $dado = $comando->fetch();
    
                $retorno = $dado['texto'];


            } catch (PDOException $erro) {
                $retorno = "Erro " . $erro->getMessage();
                return $retorno;
            }

        }
        elseif($imc == "Está acima do peso ideal, porém pode ser por causa dos músculos." 
        or $imc == "Está no estagio de obesidade, porém pode ser por causa dos músculos."
        && $somatotipo =="Ectomorfo")
        {
            try {
                $comando = $con->prepare("SELECT texto FROM text_result WHERE id = 5");
                $comando->execute();
                $dado = $comando->fetch();
    
                $retorno = $dado['texto'];


            } catch (PDOException $erro) {
                $retorno = "Erro " . $erro->getMessage();
                return $retorno;
            }

        }

    return $retorno;

    }


}
