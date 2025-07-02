<?php
session_start();
include_once("../componentes/conexion.php");
if($con){

    if(isset($_POST['nombre']) and isset($_POST['pass1']) and isset($_POST['mail'])){

        $nombre= $_POST['nombre'];
        $pass= $_POST['pass1'];
        $mail = $_POST['mail'];

        $consulta="INSERT INTO usuarios SET nombre='$nombre', mail='$mail', pass=MD5('$pass')";

        mysqli_query($con,$consulta);

        header("Location: reging.php?alta=ok");
    }
}
?>