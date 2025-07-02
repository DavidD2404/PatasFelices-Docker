<?php
require_once("../registro/admin.php");
include_once("../componentes/conexion.php");

if($con){
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }

    $consulta= "UPDATE usuarios SET estado='banneado' WHERE idUsuario='$id'";

    mysqli_query($con,$consulta);

    header("Location: usuarios.php");
}
?>