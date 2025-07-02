<?php
session_start();
include_once("../componentes/conexion.php");
if($con){
    if(isset($_POST['mail']) and isset($_POST['pass'])){

        $mail= $_POST['mail'];
        $pass= $_POST['pass'];

        $consulta="SELECT * FROM usuarios WHERE mail='$mail' AND pass=MD5('$pass')";


        $resultado=mysqli_query($con,$consulta);
        $fila=mysqli_fetch_array($resultado);

        if($fila['nivel'] == 'admin'){
            $_SESSION = $fila;
            header("Location: ../admin/index.php");
        } else if ($fila['nivel'] == 'usuario' AND $fila['estado'] == 'activo') {
            $_SESSION = $fila;
            header("Location: ../index.php");
        }
        if($fila == NULL){
            header("Location: ../registro/reging.php?error=ok");
        }
        if($fila['estado'] == 'banneado'){
            header("Location: ../registro/reging.php?ban=ok");
        }
    }
}
?>