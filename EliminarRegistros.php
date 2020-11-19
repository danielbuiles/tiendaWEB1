<?php
include("DB_Productos.php");

$id=$_GET["id"];

$catch=new Base_Datos();

$consultaSQL="DELETE FROM productos WHERE id_Producto='$id'";

$catch->EliminarDatos($consultaSQL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleEliminar.css">
    <title>Eliminar_Datos</title>
</head>
<body>
 <h2 data-text="Eliminado!">Eliminado!</h2>
</body>
</html>