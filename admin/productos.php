<?php
include_once("../componentes/headeradmin.php");
require_once("../registro/admin.php");
include_once("../componentes/conexion.php");


if ($con) {

    if(isset($_GET['categoria'])){
        $id=$_GET['categoria'];
    }

    print "<main class='container mt-3 mb-3'>
    <div class='row'>
        <div class='col-lg-6 mx-auto'>
            <h1 class=text-center>Panel ABM</h1>
                <h2 class=text-center><a href='index.php' class='text-decoration-none categ'>Categorías</a> » Productos</h2>";


    $consulta = "SELECT codigoProducto, nombreProducto, precioProducto, descripcionProducto, imgProducto, categoriaProducto FROM productos WHERE categoriaProducto='$id'";

    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {

        print "
            <table class='table table-striped table-bordered shadow mt-3'>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
        ";
        while ($filas = mysqli_fetch_array($resultado)) {

            print "
                <tr>
                    <td><a href=infoproductos.php?producto=$filas[codigoProducto]>$filas[nombreProducto]</a></td>
                    <td><a href=modProd.php?producto=$filas[codigoProducto]>Modificar</a></td>
                    <td><a href=borrProd.php?producto=$filas[codigoProducto]>Eliminar</a></td>
                </tr>
            ";
        }

        print "
            </tbody>
            </table>";

    }
}

?>
<form class="mt-3 mb-3" action="altaProd.php" method="post" enctype="multipart/form-data">
    <fieldset class="rounded shadow p-3 mb-2">
        <legend class="fw-bold">Nuevo producto</legend>
    <div>
        <label for="nombreProducto" class="form-label">Nombre del producto:</label>
        <input id="nombreProducto" name="nombreProducto"  type="text" class="form-control" required/>
    </div>
    <div>
        <label for="precioProducto" class="form-label">Precio del producto:</label>
        <input id="precioProducto" name="precioProducto"  type="number" class="form-control" required/>
    </div>
    <div class="mt-1">
            <label for="descripcionProducto" class="form-label">Descripción del producto:</label>
            <textarea id="descripcionProducto" name="descripcionProducto" class="form-control h-100"></textarea>
    </div>
    <div class="mt-1">
        <label for="arch" class="form-label">Cargar imagen:</label>
        <input id="arch" name="arch"  type="file" accept="image/jpg" class="form-control"/>
    </div>
    <div>
        <?php
            print "<input type=hidden name=categoriaProducto value=$id>";
        ?>
    </div>
    </fieldset>
        <input type="submit" class="btn btnFormulario btn-primary" value="Agregar producto">
</form>

<?php
print "</div>
    </div>
</main>";
require_once("../componentes/footer.php");
?>