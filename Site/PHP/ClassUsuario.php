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


    public function bd_result($somatotipo, $email, $imc)
    {
        global $con;
        try {
            $comando = $con->prepare("INSERT INTO result_teste VALUES (null,?,?,?)");

            $comando->bindParam(1, $imc);
            $comando->bindParam(2, $somatotipo);
            $comando->bindParam(3, $email);
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

    public function txt_result($imc, $somatotipo)
    {

        global $con;
        $retorno = "";
        $dado = "";

        if ($somatotipo == "Ectomorfo") 
        {

            if ($imc == "Está abaixo do peso ideal.") 
            {

                try 
                {
                    $comando = $con->prepare("SELECT * FROM text_result WHERE id = 1");
                    $comando->execute();
                    $dado = $comando->fetch();

                } 
                catch (PDOException $erro) 
                {
                    $retorno = "Erro " . $erro->getMessage();
                    return $retorno;
                }
            } elseif ($imc == "Está no peso ideal." or $imc=="Está no peso ideal, continue praticando exercícios.") {
                try 
                {
                    $comando = $con->prepare("SELECT * FROM text_result WHERE id = 2");
                    $comando->execute();
                    $dado = $comando->fetch();

        
                } 
                catch (PDOException $erro) 
                {
                    $retorno = "Erro " . $erro->getMessage();
                    return $retorno;
                }
            } 
            elseif ($imc == "Está acima do peso ideal.") 
            {
                try 
                {
                    $comando = $con->prepare("SELECT * FROM text_result WHERE id = 3");
                    $comando->execute();
                    $dado = $comando->fetch();

                  
                } 
                catch (PDOException $erro) 
                {
                    $retorno = "Erro " . $erro->getMessage();
                    return $retorno;
                }
            } 
            elseif ($imc == "Está no estágio da obesidade.") 
            {
                try 
                {
                    $comando = $con->prepare("SELECT * FROM text_result WHERE id = 4");
                    $comando->execute();
                    $dado = $comando->fetch();

                   
                } 
                catch (PDOException $erro)
                {
                    $retorno = "Erro " . $erro->getMessage();
                    return $retorno;
                }
            }
             elseif (
                $imc == "Está acima do peso ideal, porém pode ser por causa dos músculos."
                or $imc == "Está no estagio de obesidade, porém pode ser por causa dos músculos."
            ) 
            {
                try 
                {
                    $comando = $con->prepare("SELECT * FROM text_result WHERE id = 5");
                    $comando->execute();
                    $dado = $comando->fetch();

               
                } 
                catch (PDOException $erro) 
                {
                    $retorno = "Erro " . $erro->getMessage();
                    return $retorno;
                }
            }
        }

        if($somatotipo == "Mesomorfo")
        {
            
            if ($imc == "Está abaixo do peso ideal.") 
            {

                try 
                {
                    $comando = $con->prepare("SELECT * FROM text_result WHERE id = 6");
                    $comando->execute();
                    $dado = $comando->fetch();

                } 
                catch (PDOException $erro) 
                {
                    $retorno = "Erro " . $erro->getMessage();
                    return $retorno;
                }
            } elseif ($imc == "Está no peso ideal." or $imc=="Está no peso ideal, continue praticando exercícios." ) {
                try 
                {
                    $comando = $con->prepare("SELECT * FROM text_result WHERE id = 7");
                    $comando->execute();
                    $dado = $comando->fetch();

                } 
                catch (PDOException $erro) 
                {
                    $retorno = "Erro " . $erro->getMessage();
                    return $retorno;
                }
            } 
            elseif ($imc == "Está acima do peso ideal.") 
            {
                try 
                {
                    $comando = $con->prepare("SELECT * FROM text_result WHERE id = 8");
                    $comando->execute();
                    $dado = $comando->fetch();

                  
                } 
                catch (PDOException $erro) 
                {
                    $retorno = "Erro " . $erro->getMessage();
                    return $retorno;
                }
            } 
            elseif ($imc == "Está no estágio da obesidade.") 
            {
                try 
                {
                    $comando = $con->prepare("SELECT * FROM text_result WHERE id = 9");
                    $comando->execute();
                    $dado = $comando->fetch();


                } 
                catch (PDOException $erro)
                {
                    $retorno = "Erro " . $erro->getMessage();
                    return $retorno;
                }
            }
             elseif (
                $imc == "Está acima do peso ideal, porém pode ser por causa dos músculos."
                or $imc == "Está no estagio de obesidade, porém pode ser por causa dos músculos."
            ) 
            {
                try 
                {
                    $comando = $con->prepare("SELECT * FROM text_result WHERE id = 10");
                    $comando->execute();
                    $dado = $comando->fetch();

                } 
                catch (PDOException $erro) 
                {
                    $retorno = "Erro " . $erro->getMessage();
                    return $retorno;
                }
            }
        }

        if($somatotipo == "Endomorfo")
        {
            if ($imc == "Está abaixo do peso ideal.") 
            {

                try 
                {
                    $comando = $con->prepare("SELECT * FROM text_result WHERE id = 11");
                    $comando->execute();
                    $dado = $comando->fetch();


                } 
                catch (PDOException $erro) 
                {
                    $retorno = "Erro " . $erro->getMessage();
                    return $retorno;
                }
            } elseif ($imc == "Está no peso ideal." or $imc=="Está no peso ideal, continue praticando exercícios.") {
                try 
                {
                    $comando = $con->prepare("SELECT * FROM text_result WHERE id = 12");
                    $comando->execute();
                    $dado = $comando->fetch();

    
                } 
                catch (PDOException $erro) 
                {
                    $retorno = "Erro " . $erro->getMessage();
                    return $retorno;
                }
            } 
            elseif ($imc == "Está acima do peso ideal.") 
            {
                try 
                {
                    $comando = $con->prepare("SELECT * FROM text_result WHERE id = 13");
                    $comando->execute();
                    $dado = $comando->fetch();

            
                } 
                catch (PDOException $erro) 
                {
                    $retorno = "Erro " . $erro->getMessage();
                    return $retorno;
                }
            } 
            elseif ($imc == "Está no estágio da obesidade.") 
            {
                try 
                {
                    $comando = $con->prepare("SELECT * FROM text_result WHERE id = 14");
                    $comando->execute();
                    $dado = $comando->fetch();

                } 
                catch (PDOException $erro)
                {
                    $retorno = "Erro " . $erro->getMessage();
                    return $retorno;
                }
            }
             elseif (
                $imc == "Está acima do peso ideal, porém pode ser por causa dos músculos."
                or $imc == "Está no estagio de obesidade, porém pode ser por causa dos músculos."
            ) 
            {
                try 
                {
                    $comando = $con->prepare("SELECT * FROM text_result WHERE id = 15");
                    $comando->execute();
                    $dado = $comando->fetch();

                } 
                catch (PDOException $erro) 
                {
                    $retorno = "Erro " . $erro->getMessage();
                    return $retorno;
                }
            }

        }



        return $dado;
    }
    public function txt_somatotipo($id)
    {
        global $con;
        $retorno = "";
        try 
        {
            $comando = $con->prepare("SELECT * FROM text_somatotipo WHERE id = ?");
            $comando->bindParam(1, $id);
            $comando->execute();
            $dado = $comando->fetch();

        } 
        catch (PDOException $erro) 
        {
            $retorno = "Erro " . $erro->getMessage();
            return $retorno;
        }

        return $dado;
        
    }
    public function txt_exercicio($id)
    {
        global $con;
        $retorno = "";
        try 
        {
            $comando = $con->prepare("SELECT * FROM text_exercicio WHERE id = ?");
            $comando->bindParam(1, $id);
            $comando->execute();
            $dado = $comando->fetch();

        } 
        catch (PDOException $erro) 
        {
            $retorno = "Erro " . $erro->getMessage();
            return $retorno;
        }

        return $dado;
        
    }

    
}
