<?php
class cla_imc
{
    public function imc1($imc,$sexo){

        $retorno="";

        if($sexo == 'f'){
            if($imc < 15.3){

                $retorno = "Está abaixo do peso ideal";

            }
            elseif($imc >=15.4 && $imc <=23){

                $retorno = "Está no peso ideal";

            }elseif($retorno >= 23.1 && $imc <= 27.7){

                $retorno = "Está com sobrepeso";

            }elseif($imc>27.8){

                $retorno = "Está no estágio da obesidade";
            }
        }
        elseif($sexo == "m")
        {
            if($imc < 14.8){

                $retorno = "Está abaixo do peso ideal";

            }
            elseif($imc >=14.9 && $imc <=21.9){

                $retorno = "Está no peso ideal";

            }elseif($retorno >= 22 && $imc <= 25.9){

                $retorno = "Está com sobrepeso";

            }elseif($imc>25.9){

                $retorno = "Está no estágio da obesidade";
            }


        }

        return $retorno;

    }

    public function im2($imc,$sexo){

        $retorno="";

        if($sexo == 'f'){
            if($imc < 19.3){

                $retorno = "Está abaixo do peso ideal";

            }
            elseif($imc >=19.4 && $imc <=24.2){

                $retorno = "Está no peso ideal";

            }elseif($retorno >= 24.3 && $imc <= 28.7){

                $retorno = "Está com sobrepeso";

            }elseif($imc>28.8){

                $retorno = "Está no estágio da obesidade";
            }
        }
        elseif($sexo == "m")
        {
            if($imc < 19.2){

                $retorno = "Está abaixo do peso ideal";

            }
            elseif($imc >=19.3 && $imc <=23.7){

                $retorno = "Está no peso ideal";

            }elseif($retorno >= 23.8 && $imc <= 27.7){

                $retorno = "Está com sobrepeso";

            }elseif($imc>27.8){

                $retorno = "Está no estágio da obesidade";
            }

        }

        return $retorno;



    }







}

?>