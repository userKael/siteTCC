<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['nome']);
unset($_SESSION['imc']);
header("location: ../index.php");
?>