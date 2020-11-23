<?php
    include("DB_Productos.php");

    $Catch=new Base_Datos();

    $ConsultaSQL="SELECT * FROM productos WHERE 1";

    $DatosObtenidos=$Catch->BuscarDatos($ConsultaSQL);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleBodega.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Bodega</title>
</head>
<body>
        <div class="row row-cols-1 row-cols-md-3">
            <?php foreach ($DatosObtenidos as $Dato): ?>
                    <div class="col mb-4">
                        <div class="cardh-100">
                            <img src="<?php echo($Dato["Foto"]) ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="DBG"><?php echo($Dato["id_Producto"])?></h2>
                                <h5 class="card-title"><?php echo($Dato["Nombre"]) ?></h5>
                                <p class="card-text"><?php echo($Dato["Descripcion"])?></p>
                                <p>Marca: <?php echo($Dato["Marca"])?></p>
                                <p>Precio: <?php echo($Dato["Precio"])?></p>
                                <a href="EliminarRegistros.php?id=<?php echo($Dato["id_Producto"])?>" class="btnbtn-danger" method="GET">EliminarRegistro</a>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Editar<?php echo($Dato["id_Producto"])?>">Editar</button>
                            </div>
                            
                            <div class="modal fade" id="Editar<?php echo($Dato["id_Producto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Editar <?php echo($Dato["id_Producto"])?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="EditarProductos.php?idEditar=<?php echo($Dato["id_Producto"])?>" method="POST">
                                                <div class="form-group">
                                                    <label>Nombre_Producto:</label>
                                                    <input type="text" name="Name" value="<?php echo($Dato["Nombre"])?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Descripcion: </label>
                                                    <textarea name="stext" cols="30" rows="1" class="form-control"><?php echo($Dato["Descripcion"]) ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label >Marca:</label>
                                                    <input type="Text" name="Mrca" value="<?php echo($Dato["Marca"])?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Precio</label>
                                                    <input type="Number" name="Price" class="form-control" value="<?php echo($Dato["Precio"])?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="url" name="Script" placeholder="URL_img..." class="form-control" value="<?php echo($Dato["Foto"]) ?>">
                                                </div>
                                                <button class="btn btn-warning" name="BtnEditar">EditarUsuario</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
        </div>
     </div>
    <footer>
        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </footer>
</body>
</html>