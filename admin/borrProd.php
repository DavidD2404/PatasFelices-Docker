<?php
include_once("../componentes/headeradmin.php");
require_once("../registro/admin.php");
include_once("../componentes/conexion.php");

if($con){
    if(isset($_GET['producto'])){

        $id=$_GET['producto'];

    }
    
    $consulta= "DELETE FROM productos WHERE codigoProducto='$id'"; 

    $resultado= mysqli_query($con,$consulta);

    if($resultado){
        print "
        <main class='d-flex align-items-center justify-content-center'>
            <div class='container text-center'>
                <h1>El producto fue eliminado con éxito</h1>
                <a href=index.php>Volver</a>
            </div>
        </main>
        ";
    }
}
require_once("../componentes/footer.php");
?>