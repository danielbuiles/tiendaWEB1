<?php 
include("DB_Productos.php");

if (isset($_POST["BtnEditar"])) {
    $Nombre=$_POST["Name"];
    $Descripcion=$_POST["stext"];
    $Marca=$_POST["Mrca"];
    $Precio=$_POST["Price"];
    $Foto=$_POST["Script"];

    $idEditar=$_GET["idEditar"];

    $Catch=new Base_Datos();

    $ConsultaSQL="UPDATE productos SET Nombre='$Nombre',Marca='$Marca',Precio='$Precio',Descripcion='$Descripcion',Foto='$Foto' WHERE id_Producto=$idEditar";

    $Catch->EditarDatos($ConsultaSQL);

    header("location:Bodega.php");
}
?>