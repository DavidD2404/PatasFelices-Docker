<?php
include_once("../componentes/headeradmin.php");
require_once("../registro/admin.php");
include_once("../componentes/conexion.php");


if ($con) {

    print "<main class='container mt-3 mb-3'>
    <div class='row'>
        <div class='col-lg-6 mx-auto'>
            <h1 class=text-center>Panel ABM de Usuarios</h1>";
            print "<div class=text-center>
            <a href=index.php>Panel ABM de productos</a></div>";

    $consulta = "SELECT * FROM usuarios";

    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {

        print "
            <table class='table table-striped table-bordered shadow mt-3'>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Mail</th>
                        <th>Nivel</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
        ";
        while ($filas = mysqli_fetch_array($resultado)) {

            print "
                <tr>
                    <td>$filas[nombre]</td>
                    <td>$filas[mail]</td>
                    <td>$filas[nivel]</td>
                    <td>$filas[estado]</td>
                    ";
                    print "<td>";
                    if($filas['estado'] == 'banneado'){
                        print "<a href=activar.php?id=$filas[idUsuario] >Activar</a>";
                        
                    }else{
                        print "<a href=bannear.php?id=$filas[idUsuario] >Bannear</a>";
                    }
                    print "   |   ";
                    if($filas['nivel'] == 'admin'){
                        print "<a href=no_admin.php?id=$filas[idUsuario] >Hacer Usuario</a>";
                        
                    }else{
                        print "<a href=admin.php?id=$filas[idUsuario]>Hacer Admin</a>";
                    }
                    print "</td>
                            </tr>
                    ";  
        }
        print "
            </tbody>
            </table>";

    }
}
print "</div>
    </div>
</main>";
require_once("../componentes/footer.php");
?>