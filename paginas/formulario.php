<?php
include_once("../componentes/header.php");
?>
<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <h1 class="text-center pb-3">Ficha de Preinscripción</h1>
                <table class="table table-striped table-bordered shadow">
                    <tbody>
                        <?php
                        $nommas;
                        $genero;
                        $fecha;
                        $tamano;
                        $vacuna;
                        $nombreper;
                        $mail;
                        $telefonoP;
                        $telefonoS;
                        $base = imagecreatefromjpeg($_FILES['img']['tmp_name']);
                        $anchobase = imagesx($base);
                        $altobase = imagesy($base);
                        $nuevoancho = 200;
                        $nuevoaalto = round($altobase * $nuevoancho / $altobase);
                        $imagenbase = imagecreatetruecolor($nuevoancho, $nuevoaalto);
                        imagecopyresampled($imagenbase, $base, 0, 0, 0, 0, $nuevoancho, $nuevoaalto, $anchobase, $altobase);
                        imagejpeg($imagenbase, '../archivo/' . time() . '.jpg', 150);

                        print "<tr>";
                        print "<th>Nombre de la mascota:</th>";
                        if (isset($_POST["nommas"])) {
                            $nommas = $_POST["nommas"];
                            print "<td>$nommas</td>";
                        }
                        print "</tr>";

                        print "<tr>";
                        print "<th>Género:</th>";
                        if (isset($_POST["genero"])) {
                            $genero = $_POST["genero"];
                            print "<td>$genero</td>";
                        }
                        print "</tr>";

                        print "<tr>";
                        print "<th>Fecha de Nacimiento:</th>";
                        if (isset($_POST["fecha"])) {
                            $fecha = $_POST["fecha"];
                            print "<td>$fecha</td>";
                        }
                        print "</tr>";

                        print "<tr>";
                        print "<th>Tamaño:</th>";
                        if (isset($_POST["tamano"])) {
                            $tamano = $_POST["tamano"];
                            print "<td>$tamano</td>";
                        }
                        print "</tr>";

                        print "<tr>";
                        print "<th>Carta de Vacunación:</th>";
                        if (isset($_POST["vacuna"])) {
                            $vacuna = $_POST["vacuna"];
                            print "<td>$vacuna</td>";
                        }
                        print "</tr>";

                        print "<tr>";
                        print "<th>Foto de la Mascota:</th>";
                        print "<td><figure><img src='../archivo/" . time() . ".jpg' alt='Foto perro'></figure></td>";
                        print "</tr>";

                        print "<tr>";
                        print "<th>Nombre y apellido del responsable:</th>";
                        if (isset($_POST["nombreper"])) {
                            $nombreper = $_POST["nombreper"];
                            print "<td>$nombreper</td>";
                        }
                        print "</tr>";

                        print "<tr>";
                        print "<th>Email:</th>";
                        if (isset($_POST["mail"])) {
                            $mail = $_POST["mail"];
                            print "<td>$mail</td>";
                        }
                        print "</tr>";

                        print "<tr>";
                        print "<th>Teléfono Principal:</th>";
                        if (isset($_POST["telefonoP"])) {
                            $telefonoP = $_POST["telefonoP"];
                            print "<td>$telefonoP</td>";
                        }
                        print "</tr>";

                        print "<tr>";
                        print "<th>Teléfono de Emergencia:</th>";
                        if (isset($_POST["telefonoS"])) {
                            $telefonoS = $_POST["telefonoS"];
                            print "<td>$telefonoS</td>";
                        }
                        print "</tr>";
                        ?>
                    </tbody>
                </table>
                <div class="pt-4 text-center">
                    <p>Una vez enviado este formulario, por favor espere un período de hasta 3 días hábiles para que
                        nuestros representantes revisen su solicitud. Un miembro de nuestro equipo en Patas Felices se
                        pondrá en contacto con usted, ya sea por teléfono o correo electrónico, para confirmar los
                        detalles y finalizar el proceso de inscripción de su mascota. Agradecemos su interés en nuestros
                        servicios y estamos ansiosos por darle la bienvenida a nuestra comunidad de amantes de las
                        mascotas.</p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
require_once("../componentes/footer.php");
?>