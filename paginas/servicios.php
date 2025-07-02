<?php
include_once("../componentes/header.php");
?>
<main>
    <h1 class="text-center mt-3">Nuestros servicios</h1>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner h-100">
            <div class="carousel-item active servicio1">
                <div class="col-lg-6 text-center">
                    <h2>Servicio de Cuidado y Alojamiento para Mascotas</h2>
                    <p>Ofrecemos un servicio de cuidado y alojamiento para tus mascotas mientras estás fuera de casa.
                        Nuestro personal altamente capacitado se encargará de brindarles atención amorosa, asegurando
                        que se sientan cómodos y felices durante su estancia. Tu peludo amigo estará en un entorno
                        seguro y divertido, disfrutando de actividades y juegos adecuados para su edad y energía.</p>
                </div>
            </div>
            <div class="carousel-item servicio2">
                <div class="col-lg-6 text-center">
                    <h2>Servicio de Educación y Entrenamiento para Mascotas</h2>
                    <p>Comprendemos la importancia de una mascota bien educada y equilibrada. Ofrecemos un servicio de
                        educación y entrenamiento personalizado para ayudar a tus mascotas a desarrollar habilidades y
                        comportamientos deseables. Nuestros expertos en entrenamiento utilizan técnicas positivas y
                        refuerzo positivo para fomentar un aprendizaje efectivo y divertido.</p>
                </div>
            </div>
            <div class="carousel-item servicio3">
                <div class="col-lg-6 text-center">
                    <h2>Servicio de Diversión y Socialización para Mascotas</h2>
                    <p>Sabemos que la socialización y el juego son esenciales para el bienestar de tu mascota. Ofrecemos
                        un servicio de diversión y socialización donde las mascotas pueden interactuar y jugar en un
                        ambiente supervisado. Esto les permite desarrollar habilidades sociales, liberar energía y
                        disfrutar de la compañía de otros compañeros peludos en un entorno seguro y estimulante.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Atras</span>
        </button>
    </div>
    <h2 class="text-center p-4">Preguntas frecuentes</h2>
    <div class="accordion container pb-4" id="accordionExample">
        <div class="accordion-item">
            <h3 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    ¿Cómo puedo inscribir a mi mascota en Patas Felices?
                </button>
            </h3>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Sí, ofrecemos servicios de transporte seguro para tu mascota. Si necesitas que recojamos o
                        entreguemos a tu mascota en tu domicilio, por favor comunícate con nosotros para hacer los
                        arreglos necesarios. Nuestro objetivo es proporcionarte una experiencia cómoda y sin estrés
                        tanto para ti como para tu mascota.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ¿Cuál es la experiencia del personal en el cuidado de mascotas y niños en Patas Felices?
                </button>
            </h3>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>En Patas Felices, contamos con un equipo altamente experimentado y dedicado. Nuestros cuidadores
                        de mascotas tienen años de experiencia en el cuidado de animales, y nuestros educadores
                        infantiles son profesionales en el campo de la educación infantil con un enfoque en actividades
                        lúdicas y creativas. Todos los miembros de nuestro equipo están comprometidos en proporcionar un
                        entorno seguro y enriquecedor para tus seres queridos.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Cómo se aseguran de que mi mascota esté segura y feliz en Patas Felices?
                </button>
            </h3>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>La seguridad y la felicidad de tu mascota son nuestras principales prioridades. Contamos con
                        instalaciones seguras y supervisión constante para garantizar que tu mascota esté protegida en
                        todo momento. Además, proporcionamos actividades de enriquecimiento, ejercicio y cariño para
                        mantener a tu mascota feliz y saludable durante su estancia en Patas Felices.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    ¿Ofrecen servicios de transporte para mi mascota en Patas Felices?
                </button>
            </h3>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Sí, ofrecemos servicios de transporte seguro para tu mascota. Si necesitas que recojamos o
                        entreguemos a tu mascota en tu domicilio, por favor comunícate con nosotros para hacer los
                        arreglos necesarios. Nuestro objetivo es proporcionarte una experiencia cómoda y sin estrés
                        tanto para ti como para tu mascota.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h3 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    ¿Cuál es el proceso de selección de cuidadores en Patas Felices?
                </button>
            </h3>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>En Patas Felices, llevamos a cabo un proceso riguroso de selección de cuidadores para garantizar
                        la seguridad y el bienestar de tus mascotas. Nuestro equipo de recursos humanos realiza
                        verificaciones exhaustivas de antecedentes, verifica referencias y evalúa las habilidades y la
                        experiencia de cada candidato. Además, todos nuestros cuidadores reciben capacitación en
                        primeros auxilios para mascotas y participan en programas de desarrollo profesional continuo.
                        Nuestra misión es brindar el más alto nivel de atención y amor a tus mascotas, y seleccionar
                        cuidadores calificados es fundamental para lograrlo.</p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
require_once("../componentes/footer.php");
?>