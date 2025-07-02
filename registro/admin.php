<?php
session_start();
if(!isset($_SESSION['nivel']) || $_SESSION['nivel'] != 'admin' ){
    die("<h1 strong style=color:red class='text-center mt-5'>No tienes permisos</h1>
    <a class='text-center mt-3' href=../index.php>Volver</a>");
}
?>