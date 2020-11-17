<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Styles.css">
    <title>Tabla</title>
</head>
<body>
<form action="RegistrarProductos.php" method="POST" class="frm">
    <div class="Player">
    <h2>Administracion de Productos</h2>
    <div class="NM">
    <input type="Text" placeholder="Nombre Producto"  class="Np" Name="Np">
    <input type="Text" placeholder="Marca Producto" class="Mp" Name="Mp">
    </div>
        </br>
    <input type="number" placeholder="Precio Producto" class="Pp" Name="Pp">
        </br>
        <textarea class="Descripcion" placeholder="Descripcion" Name="Descripcion"></textarea>
        <input type="Text" placeholder="Url-imajen" Name="Url" class=Pp>
        <input type="submit" value="Enviar" class="Btn" Name="Btn">
    </div>
    <footer>
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!--Created By Daniel Builes Garcia-2020-->
<a href="Bodega.php">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    Bodega
</a>
    </footer>
    </form>
</body>
</html>