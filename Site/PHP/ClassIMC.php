<?php
class cla_imc
{
    public function imc1($imc,$sexo){

        $retorno="";

        if($sexo == 'Feminino'){
            if($imc < 15.3){

                $retorno = "Está abaixo do peso ideal.";

            }
            elseif($imc >=15.3 && $imc <=23){

                $retorno = "Está no peso ideal.";

            }elseif($imc>= 23.1 && $imc <= 27.7){

                $retorno = "Está com sobrepeso.";

            }elseif($imc>27.8){

                $retorno = "Está no estágio da obesidade.";
            }
        }
        elseif($sexo == "Masculino")
        {
            if($imc < 14.8){

                $retorno = "Está abaixo do peso ideal.";

            }
            elseif($imc >=14.9 && $imc <=21.9){

                $retorno = "Está no peso ideal.";

            }elseif($imc >= 22 && $imc <= 25.9){

                $retorno = "Está com sobrepeso.";

            }elseif($imc>25.9){

                $retorno = "Está no estágio da obesidade.";
            }


        }

        return $retorno;

    }

    public function im2($imc,$sexo){

        $retorno="";

        if($sexo == 'Feminino'){
            if($imc < 19.3){

                $retorno = "Está abaixo do peso ideal.";

            }
            elseif($imc >=19.3 && $imc <=24.2){

                $retorno = "Está no peso ideal.";

            }elseif($imc >= 24.3 && $imc <= 28.7){

                $retorno = "Está com sobrepeso.";

            }elseif($imc>28.8){

                $retorno = "Está no estágio da obesidade.";
            }
        }
        elseif($sexo == "Masculino")
        {
            if($imc < 19.2){

                $retorno = "Está abaixo do peso ideal.";

            }
            elseif($imc >=19.3 && $imc <=23.7){

                $retorno = "Está no peso ideal.";

            }elseif($imc >= 23.8 && $imc <= 27.7){

                $retorno = "Está com sobrepeso.";

            }elseif($imc>27.8){

                $retorno = "Está no estágio da obesidade.";
            }

        }

        return $retorno;
    }


    public function im3($imc,$rotexer){

        $retorno="";
       
        if($rotexer == "mode" or $rotexer == "sede"){

            if($imc <= 18.5){
                
                $retorno = "Está abaixo do peso.";
            }
            elseif($imc >= 18.6 && $imc<= 24.9){
                
                $retorno = "Está no peso ideal.";
    
            }elseif($imc >= 25 && $imc <= 29.9){
                
                $retorno = "Está acima do peso ideal.";
    
            }elseif($imc >=30){
               
                $retorno = "Está no estagio de obesidade.";
            }

       }
        elseif($rotexer == "inte"){

            if($imc < 18.5){
                $retorno = "Está abaixo do peso.";
            }
            elseif($imc >= 18.5 && $imc <= 24.9){
                $retorno = "Está no peso ideal, continue praticando exercícios.";
    
            }elseif($imc >= 25 && $imc <= 29.9){
                $retorno = "Está acima do peso ideal, porém pode ser por causa dos músculos.";
    
            }elseif($imc >=30){
                $retorno = "Está no estagio de obesidade, porém pode ser por causa dos músculos.";
            }

        }

        return $retorno;

    }

    public function im4($imc,$rotexer){

        $retorno="";
       
        if($rotexer == "mode" or $rotexer == "sede"){

            if($imc <= 22){
                
                $retorno = "Está abaixo do peso.";
            }
            elseif($imc >22 && $imc< 27){
                
                $retorno = "Está no peso ideal.";
    
            }elseif($imc >= 27){
                
                $retorno = "Está acima do peso ideal.";
    
            }

       }
        elseif($rotexer == "inte"){

            if($imc <= 22){
                
                $retorno = "Está abaixo do peso.";
            }
            elseif($imc >22 && $imc< 27){
                
                $retorno = "Está no peso ideal, continue praticando exercicios.";
    
            }elseif($imc >= 27){
                
                $retorno = "Está acima do peso ideal, porém pode ser por causa dos músculos.";
    
            }

        }

        return $retorno;
    }

}
?>