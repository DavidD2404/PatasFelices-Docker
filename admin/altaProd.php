<?php
include_once("../componentes/headeradmin.php");
require_once("../registro/admin.php");
include_once("../componentes/conexion.php");
if ($con != NULL) {

    if(isset($_POST['nombreProducto']) and isset($_POST['precioProducto']) and isset($_POST['descripcionProducto']) and isset($_POST['categoriaProducto']) ){

        $nombre=$_POST['nombreProducto'];
        $precio=$_POST['precioProducto'];
        $desc=$_POST['descripcionProducto'];
        $categoria=$_POST['categoriaProducto'];
        if (!empty($_FILES['arch']['tmp_name'])) {
        $hora = time();
        $base = imagecreatefromjpeg($_FILES['arch']['tmp_name']);
        $anchobase = imagesx($base);
        $altobase = imagesy($base);
        $nuevoancho = 1000;
        $nuevoaalto = round($altobase * $nuevoancho / $altobase);
        $imagenbase = imagecreatetruecolor($nuevoancho, $nuevoaalto);
        imagecopyresampled($imagenbase, $base, 0, 0, 0, 0, $nuevoancho, $nuevoaalto, $anchobase, $altobase);
        $hora = time();
        $foto = $hora . '.jpg';
        imagejpeg($imagenbase, '../img/'.$foto, 150);
            $consulta= "INSERT INTO productos (nombreProducto, precioProducto, descripcionProducto, imgProducto, categoriaProducto) VALUE ('$nombre','$precio','$desc', '$foto','$categoria')"; 
        } else {
            $consulta= "INSERT INTO productos (nombreProducto, precioProducto, descripcionProducto, categoriaProducto) VALUE ('$nombre','$precio','$desc','$categoria')"; 
        }    
        

        $resultado = mysqli_query($con, $consulta);


        if ($resultado) {
            print "
            <main class='d-flex align-items-center justify-content-center'>
            <div class='container text-center'>
            <h1>El producto <strong>$nombre</strong> fue agregado con éxito</h1>
            <a href=productos.php?categoria=$categoria>Volver</a>
            </div>
            </main>
            ";
        }
    }
} else {
    print "
    <main class='d-flex align-items-center justify-content-center'>
    <div class='container text-center'>
    <h1>Algo salió mal</h1>
    <a href=productos.php?categoria=$categoria>Volver</a>
    </div>
    </main>
    ";
}
require_once("../componentes/footer.php");
?>