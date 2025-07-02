<?php
include_once("../componentes/headeradmin.php");
require_once("../registro/admin.php");
include_once("../componentes/conexion.php");

if($con) {
    if(isset($_GET['categoria'])) {
        $id = $_GET['categoria'];
    }
    
    $consulta = "SELECT idCategoria, categoria, imgCategoria FROM categorias WHERE idCategoria='$id'"; 

    $resultado = mysqli_query($con, $consulta);

    if($resultado) {
        $filas = mysqli_fetch_array($resultado);
        print "
            <main class='container mt-5 mb-3'>
                <div class='row align-items-center'>
                    <div class='col-lg-6 mx-auto my-auto'>
                        <form action=modCat2.php method=post enctype=multipart/form-data>
                            <fieldset class='rounded shadow p-3 mb-4'>
                                <legend class='fw-bold'>Modificar categoría: $filas[categoria]</legend>
                                <div>
                                    <label for='nommod' class='form-label'>Nuevo nombre:</label>
                                    <input id='nommod' name='nommod' type='text' value='$filas[categoria]' class='form-control' required/>
                                </div>
                                <div class='img-container mt-1'>
                                    <label for='imgActual' class='form-label'>Imagen actual:</label>
                                    <img src='../img/$filas[imgCategoria]' alt='Imagen actual' class='img-thumbnail' style='width: 200px; height: 200px;'/>
                                </div>
                                <div class=mt-1>
                                    <label for='archmod' class='form-label'>Cargar nueva imagen:</label>
                                    <input id='archmod' name='archmod' type='file' accept='image/jpg' class='form-control'/>
                                </div>
                                <input name='id' type='hidden' value='$filas[idCategoria]'/>
                            </fieldset>
                            <input type=submit class='btn btnFormulario btn-primary' value='Modificar'>
                            <a href=index.php class='btn btnFormulario btn-danger'>Volver</a>
                        </form>
                    </div>
                </div>
            </main>
        ";
    }
}
require_once("../componentes/footer.php");
?>
