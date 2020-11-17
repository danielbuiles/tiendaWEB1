<?php
    include("DB_Productos.php");

    $Catch=new Base_Datos();

    $ConsultaSQL="SELECT * FROM productos WHERE 1";

    $Catch->BuscarDatos($ConsultaSQL);

    $DatosObtenidos=$Catch->BuscarDatos($ConsultaSQL);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Bodega</title>
</head>
<body>
    <div class="row row-cols-1 row-cols-md-3">
    <?php foreach ($DatosObtenidos as $Dato):?>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="<?php echo($Dato["Foto"]) ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo($Dato["Nombre"]) ?></h5>
                        <p class="card-text"><?php echo($Dato["Descripcion"])?></p>
                        <p >Marca: <?php echo($Dato["Marca"])?></p>
                        <p>Precio: <?php echo($Dato["Precio"])?></p>
                        <a href="EliminarRegistros.php?id=<?php echo($Dato["id_Producto"])?>" class="btn btn-danger" method="GET">EliminarTargeta</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <footer>
        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </footer>
</body>
</html>