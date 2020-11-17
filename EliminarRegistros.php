<?php
include("DB_Productos.php");

$id=$_GET["id"];

$catch=new Base_Datos();

$consultaSQL="DELETE FROM productos WHERE id_Producto='$id'";

$catch->EliminarDatos($consultaSQL);
?>