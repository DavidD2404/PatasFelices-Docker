<?php
session_start();
$usuarioAutenticado = isset($_SESSION['nivel']) && $_SESSION['nivel'] == 'usuario';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patas felices</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <figure><img src="../img/logo.png" alt="logo" width="130"></figure>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <?php
                        $menu = array();

                        $menu['Inicio'] = 'inicio';
                        $menu['Quiénes Somos'] = 'quienes';
                        $menu['Servicios'] = 'servicios';
                        $menu['Productos'] = 'productos';
                        $menu['Contacto'] = 'contacto';

                        print "<ul class=navbar-nav>";
                        foreach ($menu as $nombres => $links) {
                            print "<li class=nav-item><a class=nav-link href=../paginas/$links.php >$nombres</a></li>";

                        }
                        print "</ul>";
                        ?>
                        <?php
                            if ($usuarioAutenticado) {
                                print '<a href="../registro/logout.php" class="btn btn-danger btnLogin ms-2">Cerrar Sesión</a>';
                            } else {
                                print '<a href="../registro/reging.php" class="btn btn-dark btnLogin ms-2">Ingresar/Registrarse</a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </nav>

    </header>