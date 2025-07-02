<?php
include_once("../componentes/header.php");
?>
<main class="container">
    <div class="row justify-content-center mt-3 mb-3">
        <div class="col-lg-5">
            <form action="login.php" method="post">
                <fieldset class="rounded shadow p-3">
                    <legend class="fw-bold">Iniciar sesión</legend>
                    <div class="mb-3">
                        <label for="mail" class="form-label">Mail</label>
                        <input id="mail" name="mail" type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Contraseña</label>
                        <input id="pass" name="pass" type="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                    <div>
                        <?php
                            if(isset($_GET['error'])){
                                print "<strong style=color:red >Usuario o contraseña incorrectos</strong>"; }
                            if(isset($_GET['ban'])){
                                print "<strong style=color:red >Usuario baneado, contacta al admin.</strong>";}
                        ?>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-lg-5">
            <form id="form" method="post">
                <fieldset class="rounded shadow p-3">
                    <legend class="fw-bold">Registrarse</legend>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" require>
                    </div>
                    <div class="mb-3">
                        <label for="mail" class="form-label">Mail</label>
                        <input id="mail" name="mail" type="email" class="form-control" require>
                    </div>
                    <div class="mb-3">
                        <label for="pass1" class="form-label">Contraseña</label>
                        <input id="pass1" name="pass1" type="password" class="form-control" require>
                    </div>
                    <div class="mb-3">
                        <label for="pass2" class="form-label">Repite la contraseña</label>
                        <input id="pass2" name="pass2" type="password" class="form-control" require>
                    </div>
                    <div class="mb-3">
                        <button type="submit" id="boton" class="btn btn-success">Registrarse</button>
                    </div>
                    <div>
                    <?php
                        if(isset($_GET['alta'])){
                            print "<strong style=color:green >Registrado con éxito, ya puedes iniciar sesión.</strong>";
                        }
                        ?>
                    </div>
                </fieldset>
            </form>
            <script>
                var pass1 = document.getElementById("pass1");
                var pass2 = document.getElementById("pass2");
                var boton = document.getElementById("boton");
                var form = document.getElementById("form");
                boton.onclick = function(){
                if(pass1.value != pass2.value){
                    alert("Error: las constraseñas no coinciden.");

                }else{
                    form.action = "alta.php";
                }
                }
            </script>
        </div>
    </div>
</main>
<?php
require_once("../componentes/footer.php");
?>