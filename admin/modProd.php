<?php
include_once("../componentes/headeradmin.php");
require_once("../registro/admin.php");
include_once("../componentes/conexion.php");

if ($con) {
    if (isset($_GET['producto'])) {
        $id = $_GET['producto'];
    }

    $consulta = "SELECT codigoProducto, nombreProducto, precioProducto, descripcionProducto, imgProducto, categoriaProducto FROM productos WHERE codigoProducto='$id'";

    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {
        $filas = mysqli_fetch_array($resultado);
        print "
            <main class='container mt-5 mb-3'>
                <div class='row align-items-center'>
                    <div class='col-lg-6 mx-auto my-auto'>
                        <form action=modProd2.php method=post enctype=multipart/form-data>
                            <fieldset class='rounded shadow p-3 mb-4'>
                                <legend class='fw-bold'>Modificar producto: $filas[nombreProducto]</legend>
                                <div>
                                    <label for='nommodpro' class='form-label'>Nombre del producto:</label>
                                    <input id='nommodpro' name='nommodpro' type='text' value='$filas[nombreProducto]' class='form-control' required/>
                                </div>
                                <div>
                                    <label for='premodpro' class='form-label'>Precio del producto:</label>
                                    <input id='premodpro' name='premodpro' type='text' value='$filas[precioProducto]' class='form-control' required/>
                                </div>
                                <div class=mt-1>
                                    <label for=descmodpro class=form-label>Descripción del producto:</label>
                                    <textarea id=descmodpro name=descmodpro class=form-control h-100>$filas[descripcionProducto]</textarea>
                                </div>
                                <div class='img-container mt-1'>
                                    <label for='imgActual' class='form-label'>Imagen actual:</label>
                                    <img src='../img/$filas[imgProducto]' alt='Imagen actual' class='img-thumbnail' style='width: 200px; height: 200px;'/>
                                </div>
                                <div class=mt-1>
                                    <label for='imgmodpro' class='form-label'>Cargar nueva imagen:</label>
                                    <input id='imgmodpro' name='imgmodpro' type='file' accept='image/jpg' class='form-control'/>
                                </div>
                                <div class=mt-1>
                                    <label for=id class=form-label>Cambiar de categoría:</label>
                                    <select id=id name=id class=form-select>";
                                        $idcategoriaActual = $filas['categoriaProducto'];
                                        $consulta2 = "SELECT idCategoria, categoria, imgCategoria FROM categorias";
                                        $respuesta = mysqli_query($con, $consulta2);
                                        $nombreCategoriaActual = '';

                                        while ($fila = mysqli_fetch_array($respuesta)) {
                                            if ($fila['idCategoria'] == $idcategoriaActual) {
                                                $nombreCategoriaActual = $fila['categoria'];
                                            }
                                        }

                                        $respuesta = mysqli_query($con, $consulta2);
                                        print "<option value='$idcategoriaActual' selected>$nombreCategoriaActual</option>";

                                        while ($fila = mysqli_fetch_array($respuesta)) {
                                            if ($fila['categoria'] != $nombreCategoriaActual) {
                                                print "<option value='$fila[idCategoria]'>$fila[categoria]</option>";
                                            }
                                        }
                                    print "</select>
                                </div>
                                <input type=hidden name=codigoProducto value=$filas[codigoProducto] />
                            </fieldset>
                            <input type=submit class='btn btnFormulario btn-primary' value='Modificar'>
                            <a href=productos.php?categoria=$filas[categoriaProducto] class='btn btnFormulario btn-danger'>Volver</a>
                        </form>
                    </div>
                </div>
            </main>
        ";
    }
}
require_once("../componentes/footer.php");
?>
