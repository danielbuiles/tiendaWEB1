<?php
include("DB_Productos.php");
if (isset($_POST["Btn"])) {
    $NombreProducto=$_POST["Np"];
    $MarcaProducto=$_POST["Mp"];
    $PrecioProducto=$_POST["Pp"];
    $Descripcion=$_POST["Descripcion"];

    $Catch=new Base_Datos();
    
    $consultaSQL="INSERT INTO productos( Nombre, Marca, Precio, Descripcion) VALUES ('$NombreProducto','$MarcaProducto','$PrecioProducto','$Descripcion')";

    $Catch->AgregarDatos($consultaSQL);

    $Resultado=$Catch->AgregarDatos($consultaSQL);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/StyleProductos.css">
    <title>Inyeccion</title>
</head>
<body>
    <h2 data-text="Enviados!"><?php echo($Resultado) ?></h2>
</body>
</html>