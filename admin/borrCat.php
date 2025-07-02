<?php
include_once("../componentes/headeradmin.php");
require_once("../registro/admin.php");
include_once("../componentes/conexion.php");

if ($con) {
    if (isset($_GET['categoria'])) {
        $id = $_GET['categoria'];

        $consultaEliminarProductos = "DELETE FROM productos WHERE categoriaProducto='$id'";
        $resultadoEliminarProductos = mysqli_query($con, $consultaEliminarProductos);
        $consultaEliminarCategoria = "DELETE FROM categorias WHERE idCategoria='$id'";
        $resultadoEliminarCategoria = mysqli_query($con, $consultaEliminarCategoria);

        if ($resultadoEliminarCategoria) {
            print "
            <main class='d-flex align-items-center justify-content-center'>
                <div class='container text-center'>
                    <h1>La categoría y sus productos fueron eliminados con éxito</h1>
                    <a href=index.php>Volver</a>
                </div>
            </main>
            ";
        } else {
            print "
            <main class='d-flex align-items-center justify-content-center'>
                <div class='container text-center'>
                    <h1>Error al intentar eliminar la categoría y sus productos</h1>
                    <a href=index.php>Volver</a>
                </div>
            </main>
            ";
        }
    }
}
require_once("../componentes/footer.php");
?>