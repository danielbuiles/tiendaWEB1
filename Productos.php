<?php
include("DB_Productos.php");
if (isset($_POST["Btn"])) {
    $NombreProducto=$_POST["Np"];
    $MarcaProducto=$_POST["Mp"];
    $PrecioProducto=$_POST["Pp"];
    $Descripcion=$_POST["Descripcion"];

    $Catch=new Base_Datos();
    
    $Datos="INSERT INTO productos( Nombre, Marca, Precio, Descripcion) VALUES ('$NombreProducto','$MarcaProducto','$PrecioProducto','$Descripcion')";

    $Catch->AgregarDatos($Datos);
}
?>