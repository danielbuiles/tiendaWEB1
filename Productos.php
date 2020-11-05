<?php
include("DB_Productos.php");

if (isset($_POST["Btn"])) {
    $Catch=new Base_Datos();
    $Catch->Conexion();
}
?>