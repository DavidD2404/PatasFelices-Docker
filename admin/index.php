<?php
include_once("../componentes/headeradmin.php");
require_once("../registro/admin.php");
include_once("../componentes/conexion.php");


if ($con) {

    print "<main class='container mt-3 mb-3'>
    <div class='row'>
        <div class='col-lg-6 mx-auto'>
            <h1 class=text-center>Panel ABM de Productos</h1>";
            print "<div class=text-center>
            <a href=usuarios.php>Panel ABM de usuarios</a></div>";

    $consulta = "SELECT idCategoria, categoria, imgCategoria FROM categorias";

    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {

        print "
            <table class='table table-striped table-bordered shadow mt-3'>
                <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
        ";
        while ($filas = mysqli_fetch_array($resultado)) {

            print "
                <tr>
                    <td><a href=productos.php?categoria=$filas[idCategoria]>$filas[categoria]</a></td>
                    <td><a href=modCat.php?categoria=$filas[idCategoria]>Modificar</a></td>
                    <td><a href=borrCat.php?categoria=$filas[idCategoria]>Eliminar</a></td>
                </tr>
            ";
        }

        print "
            </tbody>
            </table>";

    }
}

?>
<form class="mt-3 mb-3" action="altaCat.php" method="post" enctype="multipart/form-data">
    <fieldset class="rounded shadow p-3 mb-2">
        <legend class="fw-bold">Nueva categoría</legend>
    <div>
        <label for="nom" class="form-label">Nombre de la categoría:</label>
        <input id="nom" name="nom"  type="text" class="form-control" required/>
    </div>
    <div class="mt-1">
        <label for="arch" class="form-label">Cargar imagen:</label>
        <input id="arch" name="arch"  type="file" accept="image/jpg" class="form-control"/>
    </div>
    </fieldset>
        <input type="submit" class="btn btnFormulario btn-primary" value="Agregar categoria">
</form>

<?php
print "</div>
    </div>
</main>";
require_once("../componentes/footer.php");
?>