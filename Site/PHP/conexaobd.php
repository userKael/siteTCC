<?php 
$banco = 'guder_saude';
$usuario = 'root';
$senha = 'vertrigo';
global $con;

try{
    $con =  new PDO("mysql:host=localhost; dbname=$banco", "$usuario", "$senha");
    $con-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $con->exec("set names utf8");
}
catch(PDOException $erro){
    echo"Erro na conexão: ". $erro->getMessage();

}
