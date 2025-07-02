<?php
include_once("../componentes/headeradmin.php");
require_once("../registro/admin.php");
include_once("../componentes/conexion.php");

if ($con) {

    if(isset($_GET['producto'])){
        $id=$_GET['producto'];
    }

    print "<main class='container mt-3 mb-3'>
    <div class='row'>
        <div>
            <h1 class=text-center>Panel ABM</h1>";
            

    $consulta = "SELECT nombreProducto, precioProducto, descripcionProducto, imgProducto, categoriaProducto FROM productos WHERE codigoProducto='$id'";
    $resultado = mysqli_query($con, $consulta);

    if ($filas = mysqli_fetch_array($resultado)) {
            print "<h2 class=text-center><a href='index.php' class='text-decoration-none categ'>Categorías</a>» <a href='productos.php?categoria=$filas[categoriaProducto]' class='text-decoration-none categ'>Productos</a> » Producto</h2>
                <div class='card col-lg-4 mx-auto mt-3'>
                    <img src='../img/$filas[imgProducto]' class='card-img-top' alt='Imagen del Producto'>
                    <div class='card-body'>
                        <h3 class='card-title'>$filas[nombreProducto]</h3>
                        <p class='card-text'>Precio: $$filas[precioProducto]</p>
                        <p class='card-text'>Descripción: $filas[descripcionProducto]</p>
                    </div>
                </div>
                <div class='text-center mt-2'>
                <a href=productos.php?categoria=$filas[categoriaProducto] class='btn btnFormulario btn-danger text-center mx-auto'>Volver</a>
                </div>
            </div>
        </div>
    </main>";
    }
}

require_once("../componentes/footer.php");
?>