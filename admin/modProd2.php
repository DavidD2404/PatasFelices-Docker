<?php
include_once("../componentes/headeradmin.php");
require_once("../registro/admin.php");
include_once("../componentes/conexion.php");
if ($con != NULL) {

    if (isset($_POST['nommodpro']) and isset($_POST['premodpro']) and isset($_POST['descmodpro']) and isset($_POST['id']) and  isset($_POST['codigoProducto']) ) {
        $codigo=$_POST['codigoProducto'];
        $id=$_POST['id'];
        $nombre = $_POST['nommodpro'];
        $precio = $_POST['premodpro'];
        $descripcion = $_POST['descmodpro'];
        if (!empty($_FILES['imgmodpro']['tmp_name'])) {
            $base = imagecreatefromjpeg($_FILES['imgmodpro']['tmp_name']);
            $anchobase = imagesx($base);
            $altobase = imagesy($base);
            $nuevoancho = 1000;
            $nuevoaalto = round($altobase * $nuevoancho / $altobase);
            $imagenbase = imagecreatetruecolor($nuevoancho, $nuevoaalto);
            imagecopyresampled($imagenbase, $base, 0, 0, 0, 0, $nuevoancho, $nuevoaalto, $anchobase, $altobase);
            $hora = time();
            $foto = $hora . '.jpg';
            imagejpeg($imagenbase, '../img/' . $foto, 150);

            $consulta = "UPDATE productos SET nombreProducto='$nombre', precioProducto='$precio', descripcionProducto='$descripcion', imgProducto='$foto', categoriaProducto='$id' WHERE codigoProducto='$codigo' ";
        } else {
            $consulta = "UPDATE productos SET nombreProducto='$nombre', precioProducto='$precio', descripcionProducto='$descripcion', categoriaProducto='$id' WHERE codigoProducto='$codigo' ";
        }

        $resultado = mysqli_query($con, $consulta);

        if ($resultado) {
            print "
            <main class='d-flex align-items-center justify-content-center'>
            <div class='container text-center'>
            <h1>El producto fue modificado por <strong>$nombre</strong> con éxito</h1>
            <a href=index.php>Volver</a>
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
            <a href=index.php>Volver</a>
        </div>
    </main>
    ";
}
require_once("../componentes/footer.php");
?>