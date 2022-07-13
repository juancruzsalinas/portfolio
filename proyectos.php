<?php 
 $pg= "proyectos";   
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Proyectos</title>
</head>

<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once "menu.php";?>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5 ">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="./images/abmclientes.png" alt="" class="img-fluid">

                    </div>
                    <div class="col-12 color-gradiente py-3">
                        <h2>AMB CLIENTES</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap
                            y Json.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6"><a href="" class="btn btn-ver-online" target="_blank">Ver Online</a></div>
                        <div class="col-6 link-rojo text-center pt-1"><a href="">Codigo fuente</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="../portfolio/images/abmventas.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente py-3">
                        <h2>SISTEMA DE GESTION DE VENTAS</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                            Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6"><a href="" class="btn btn-ver-online" target="_blank">Ver Online</a></div>
                        <div class="col-6 link-rojo text-center pt-1"><a href="">Codigo fuente</a></div>
                    </div>

                </div>

            </div>
            <div class="col-12 col-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="../portfolio/images/proyecto-integrador.png" alt="" class="img-fluid">

                    </div>
                    <div class="col-12 color-gradiente py-3">

                        <h2>PROYECTO INTEGRADOR</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                            Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                            funcionalidades a fines.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6"><a href="" class="btn btn-ver-online" target="_blank">Ver Online</a></div>
                        <div class="col-6 link-rojo text-center pt-1"><a href="">Codigo fuente</a></div>
                    </div>
                </div>

            </div>
        </div>

    </main>


    <footer class="container mt-5 pb-4">
        <div class="row">
            <div class="col-12 col-sm-3">
                <a href="" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3">
                Sponsor <a href="https://depcsuite.com">DePC Suite</a>

            </div>
            <div class="col-12 col-sm-3">
                <a href="mailto:juancruzsalinas1605@gmail.com">juancruzsalinas1605@gmail.com</a>
            </div>
        </div>
    </footer>
    <div class="btn-whatsapp">
        <a href="" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
    </div>
</body>

</html>