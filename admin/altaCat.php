<?php
include_once("../componentes/headeradmin.php");
require_once("../registro/admin.php");
include_once("../componentes/conexion.php");
if ($con != NULL) {

    if (isset($_POST['nom'])) {
        $nombre = $_POST['nom'];
        $hora = time();
        if (!empty($_FILES['arch']['tmp_name'])) {
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
            $consulta = "INSERT INTO categorias(categoria, imgCategoria) VALUES ('$nombre','$foto')";
        } else{
            $consulta = "INSERT INTO categorias(categoria) VALUES ('$nombre')";
        }
        

        $resultado = mysqli_query($con, $consulta);


        if ($resultado) {
            print "
            <main class='d-flex align-items-center justify-content-center'>
            <div class='container text-center'>
            <h1>La categoria <strong>$nombre</strong> fue agregada con éxito</h1>
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