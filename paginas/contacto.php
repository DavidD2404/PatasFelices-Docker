<?php
include_once("../componentes/header.php");
?>
<main>
    <div class="formulario">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-center m-3">
                    <h1>Formulario de Pre-inscripción</h1>
                </div>
                <form class="px-5 " id="formContacto" method="post" enctype="multipart/form-data">
                    <fieldset class="border border-secondary rounded shadow p-3 mb-4">
                        <legend class="fw-bold">Datos de la mascota</legend>
                        <div class="mb-2">
                            <label for="nommas" class="form-label">Nombre:</label>
                            <input id="nommas" type="text" class="form-control" name="nommas" placeholder="Nombre">
                        </div>
                        <div class="mb-2">
                            <label for="genero" class="form-label">Género:</label>
                            <select id="genero" name="genero" class="form-select">
                                <option>-Seleccione el género-</option>
                                <option value="Macho">Macho</option>
                                <option value="Hembra">Hembra</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="fecha" class="form-label">Fecha de nacimiento:</label>
                            <input id="fecha" type="date" class="form-control" name="fecha">
                        </div>
                        <div class="mb-2">
                            <label for="tamano" class="form-label">Tamaño:</label>
                            <select id="tamano" class="form-select" name="tamano">
                                <option>-Seleccione el tamaño-</option>
                                <option value="Pequeño">Pequeño</option>
                                <option value="Mediano">Mediano</option>
                                <option value="Grande">Grande</option>
                            </select>
                        </div>
                        <p>¿Tiene su carta de vacunación completa?</p>
                        <div class="form-check">
                            <input class="form-check-input" id="si" type="radio" name="vacuna" value="Si">
                            <label class="form-check-label" for="si">Si</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" id="no" type="radio" name="vacuna" value="No">
                            <label class="form-check-label" for="no">No</label>
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Foto de la mascota:</label>
                            <input id="img" accept="image/jpeg" type="file" class="form-control" name="img">
                        </div>
                    </fieldset>
                    <fieldset class="border border-secondary rounded shadow p-3 mb-4">
                        <legend class="fw-bold">Datos del responsable</legend>
                        <div class="mb-2">
                            <label for="nomper" class="form-label">Nombre y apellido:</label>
                            <?php
                            if ($usuarioAutenticado) {
                                print '<input id="nomper" type="text" name="nombreper" class="form-control" value="' . $_SESSION['nombre'] . '">';
                            } else {
                                print '<input id="nomper" type="text" name="nombreper" class="form-control"
                                placeholder="Nombre y apellido">';
                            }
                            ?>
                        </div>
                        <div class="mb-2">
                            <label for="mail" class="form-label">Email:</label>
                            <?php
                            if ($usuarioAutenticado) {
                                print '<input id="mail" type="email" name="mail" class="form-control" value="' . $_SESSION['mail'] . '">';
                            } else {
                                print '<input id="mail" type="email" name="mail" placeholder="Email" class="form-control">';
                            }
                            ?>
                        </div>
                        <div class="mb-2">
                            <label for="telefonoP" class="form-label">Número de teléfono principal:</label>
                            <input id="telefonoP" type="tel" name="telefonoP" class="form-control"
                                placeholder="Número principal">
                        </div>
                        <div class="mb-2">
                            <label for="telefonoS" class="form-label">Número de teléfono de emergencia:</label>
                            <input id="telefonoS" type="tel" name="telefonoS" class="form-control"
                                placeholder="Número emergencia">
                        </div>
                    </fieldset>

                    <button type="submit" id="botonContacto" class="btn btnFormulario btn-primary">Enviar</button>
                </form>
                <script>
                    var telefonoP = document.getElementById("telefonoP");
                    var telefonoS = document.getElementById("telefonoS");
                    var botonContacto = document.getElementById("botonContacto");
                    var formContacto = document.getElementById("formContacto");

                    botonContacto.onclick = function() {
                        if (telefonoP.value != telefonoS.value) {
                            formContacto.action = "formulario.php";
                        } else {                        
                            alert("Error: el número de telefono principal y el de emergencia no pueden coincidir.");
                        }
                    }
                </script>
            </div>
            <div class="col-lg-6">
                <figure class="d-flex align-items-stretch h-100 image-container">
                    <img src="../img/portada3.jpg" alt="Perro" class="img-fluid">
                </figure>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="text-center mt-5 mb-4">
                    <h2>Ubicacion</h2>
                </div>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2361.4440439040504!2d-58.67257512131474!3d-34.40878603637768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bca168c51ed607%3A0x592102df6598807b!2sNordelta%20%2F%20Barrio%20Las%20Tipas!5e0!3m2!1ses!2sar!4v1695496570195!5m2!1ses!2sar"
                        height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        class="w-100 shadow rounded"></iframe>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12 text-center">
                    <p>Puedes contactarnos en cualquier momento.</p>
                    <p>Teléfono: <span class="fw-bold">11 4456-7890</span></p>
                    <p>Correo Electrónico: <a href="mailto:patasfelices@davinci.edu.ar">patasfelices@davinci.edu.ar</a>
                    </p>
                    <figure>
                        <img src="../img/contacto.png" alt="Teléfono">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
require_once("../componentes/footer.php");
?>