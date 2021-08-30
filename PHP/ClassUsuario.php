<?php

class Usuario{

    public function login ($email, $senha){

        global $con;

        $comando=$con->prepare("SELECT * FROM cadastro WHERE email = ? AND senha = ?");
        $comando->bindParam(1, $email);
        $comando->bindParam(2, $senha);
        $comando->execute();

        if($comando->rowCount() > 0){
            $dado = $comando->fetch();
            $dado['email'];
            $_SESSION['email'] = $dado['email'];

            return true;

        }else{
            return false;
        }
    }
}

?>