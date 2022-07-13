<?php 
 $pg= "inicio";   
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
    <title>Inicio</title>
</head>

<body id="inicio">
    <header class="container">
        <?php include_once "menu.php";?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center div-cohete mt-4">
                <a href="proyectos.html"> <img src="../portfolio/images/cohete.svg" alt="cohete" class="cohete"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                <div class="input-home">
                    <p class="p-1">Bienvenid@ a mi sitio web sobre desarrollo en sistemas.</p>
                </div>
            </div>
        </div>
<div class="row">
    <div class="col-12 text-center pb-4">
        <a href="proyectos.php" class="btn shadow">Conoce mis proyectos</a>
    </div>
</div>

    </main>

    <footer class="container mt-auto pb-4">
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