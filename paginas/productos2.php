<?php
include_once("../componentes/header.php");
include_once("../componentes/conexion.php");

if ($con != NULL) {
    $nombreCategoria = $_GET['nombre'];
    print "<main class='text-center container mb-5 mt-3'>
    <h1><a href='productos.php' class='text-decoration-none categ'>Categorías</a> » $nombreCategoria</h1>";
    $id;
    if(isset($_GET['categoria'])){
    $id = $_GET['categoria'];
    }
    $consulta = "SELECT codigoProducto, nombreProducto, precioProducto, descripcionProducto, imgProducto, categoriaProducto FROM productos WHERE categoriaProducto='$id'";

    $respuesta = mysqli_query($con, $consulta);

    print "<div class='row row-cols-1 row-cols-md-3 g-3 justify-content-center'>";

    $primerProducto = mysqli_fetch_array($respuesta);

    if (!empty($primerProducto)) {
        print "
            <div class='col-md-4 col-lg-3'>
                    <div class='card card-productos shadow mt-3'>
                        <img src=../img/{$primerProducto['imgProducto']} alt={$primerProducto['nombreProducto']} class='card-img-top'/>
                        <div class='card-body'>
                            <h2>{$primerProducto['nombreProducto']}</h2>
                            <p class='precio'>$ {$primerProducto['precioProducto']}</p>
                            <p class='descripcion hidden'>{$primerProducto['descripcionProducto']}</p>
                        </div>
                    </div>
            </div>
        ";
        while ($fila = mysqli_fetch_array($respuesta)) {
            print "
                <div class='col-md-4 col-lg-3'>
                        <div class='card card-productos shadow mt-3'>
                            <img src=../img/{$fila['imgProducto']} alt={$fila['nombreProducto']} class='card-img-top'/>
                            <div class='card-body'>
                                <h2>{$fila['nombreProducto']}</h2>
                                <p class='precio'>$ {$fila['precioProducto']}</p>
                                <p class='descripcion hidden'>{$fila['descripcionProducto']}</p>
                            </div>
                        </div>
                </div>
            ";
        }
    } else {
        print "<div class='col-12 mt-5'>
                   <h2>No hay productos cargados en esta categoría</h2>
               </div>";
    }

    print "</div>
    </main>";

} else {
    print "<main>
                <h1>Algo salió mal</h1>
            </main>";
}

require_once("../componentes/footer.php");
?>
