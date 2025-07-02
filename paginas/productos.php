<?php
include_once("../componentes/header.php");
include_once("../componentes/conexion.php");

if ($con != NULL) {
    print "<main class='text-center container mb-5 mt-3'>
    <h1>Categorías</h1>";
    $consulta = "SELECT idCategoria, categoria, imgCategoria FROM categorias";

    $respuesta = mysqli_query($con, $consulta);
    print "<div class='row row-cols-1 row-cols-md-2 g-4 justify-content-center'>";
    
    while ($fila = mysqli_fetch_array($respuesta)) {
        print "
            <div class='col-md-6 col-lg-4'>
                <a href='productos2.php?categoria=$fila[idCategoria]&nombre=$fila[categoria]' class=nombreCat>
                    <div class='card card-categorias shadow mt-3'>
                        <img src=../img/$fila[imgCategoria] alt=$fila[categoria] class='card-img-top'/>
                        <div class='card-body'>
                            <h2>$fila[categoria]</h2>
                        </div>
                    </div>
                </a>
            </div>
        ";
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