<?php
include_once("../componentes/header.php");
?>
<main>
    <div class="portada">
        <div class="row container">
            <div class="col-lg-6">
                <h1>¡Bienvenido a Patas Felices!</h1>
                <p class="lead">Nuestro objetivo es proporcionar un entorno seguro y divertido para el cuidado y la
                    educación de tus hijos y mascotas.</p>
                <a href="contacto.php" class="btn btnContacto btn-dark btn-lg">Contáctanos</a>
            </div>
        </div>
    </div>

    <div class="portada2 py-5">
        <div class="container">
            <div class="row mensaje text-center rounded p-4">
                <div class="col-md-4">
                    <div>
                        <h2>Horarios Flexibles</h2>
                        <p>Adaptamos nuestros horarios para satisfacer tus necesidades.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <h2>Cuidado Cariñoso</h2>
                        <p>Brindamos un cuidado amoroso y seguro para tus seres queridos.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <h2>Aprendizaje Divertido</h2>
                        <p>Fomentamos el aprendizaje a través de actividades lúdicas.</p>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-4">
                <h2>¡Clientes felices!</h2>
                <div class="col-md-4">
                    <div class="card mb-2 shadow mt-2 h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-center pt-3">
                                <figure><img class="tm-people rounded-circle" src="../img/persona1.jpeg" alt="persona">
                                </figure>
                            </div>
                            <p class="card-text pt-2">"Excelente servicio. Mis mascotas están felices aquí. Gracias por
                                todo,
                                lo recomiendo siempre."</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">- Juan Pérez</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow mt-2 h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-center pt-3">
                                <figure><img class="tm-people rounded-circle" src="../img/persona2.jpeg" alt="persona">
                                </figure>
                            </div>
                            <p class="card-text pt-2">"Los cuidadores son muy amables y profesionales. Lo recomiendo
                                mucho."
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">- María González</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow mt-2 h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-center pt-3">
                                <figure><img class="tm-people rounded-circle" src="../img/persona3.jpeg" alt="persona">
                                </figure>
                            </div>
                            <p class="card-text pt-2">"Mi hijo ha aprendido mucho y se divierte cada día. ¡Gracias,
                                Patas
                                Felices!"</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">- Ana Rodríguez</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<?php
require_once("../componentes/footer.php");
?>