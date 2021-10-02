<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['nome']);
unset($_SESSION['senha']);
unset($_SESSION['somatotipo']);
unset($_SESSION['imc']);
unset($_SESSION['imc_bd']);
header("location: ../index.php");
?>