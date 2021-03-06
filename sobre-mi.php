<?php 
 $pg= "sobre-mi";   
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
    <title>Sobre Mi</title>
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once "menu.php";?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-5 mt-4">
                    <h1 class="mt-sm-4 pb-sm-4">Sobre Mi</h1>
                    <p class="pb-sm-5">
                        Apasionado por la tecnología y gestión de proyectos. Soy docente de cursos de programación Full
                        Stack y de Base de datos.
                    </p>
                    <a href="contacto.html" class="btn btn-rojo">Enviar Mensaje</a>
                </div>
                <div class="col-12 col-sm-3 mt-4 offset-sm-2">
                    <img src="../portfolio/images/juancruz.jpg" alt="Juan Cruz Salinas" title="Juan Cruz Salinas"
                        class="img-fluid img-circle">
                </div>
            </div>



        </div>
        <section id="tecnologias" class="color-gradiente pb-5 mt-4 ">

            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <h2 class="my-sm-5 text-white">Stack Tecnologico</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 col-sm-2 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>Javascript</h3>
                            <img src="../portfolio/images/javascript.jpeg" alt="Javascript" title="Javascript"
                                class="img-fluid d-block mx-auto" width="60">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>PHP</h3>
                            <img src="../portfolio/images/php.jpg" alt="php" title="php"
                                class="img-fluid d-block mx-auto" width="60">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>HTML5</h3>
                            <img src="../portfolio/images/html.png" alt="HTML5" title="HTML5"
                                class="img-fluid d-block mx-auto" width="60">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>React.js</h3>
                            <img src="../portfolio/images/react.png" alt="React.js" title="React.js"
                                class="img-fluid d-block mx-auto" width="60">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>jQuery</h3>
                            <img src="../portfolio/images/jquery.jpg" alt="jQuery" title="jQuery"
                                class="img-fluid d-block mx-auto" width="60">
                        </div>

                    </div>
                    <div class="col-6 col-sm-2 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>Bootstrap</h3>
                            <img src="../portfolio/images/bootstrap.png" alt="Bootstrap" title="Bootstrap"
                                class="img-fluid d-block mx-auto" width="60">
                        </div>
                    </div>
                </div>
                <div class="row mt-sm-4 mt-0">
                    <div class="col-6 col-sm-2 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>Laravel</h3>
                            <img src="../portfolio/images/Laravel.png" alt="Laravel" title="Laravel"
                                class="img-fluid d-block mx-auto" width="60">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>MySQL</h3>
                            <img src="../portfolio/images/mysql.png" alt="MySQL" title="MySQL"
                                class="img-fluid d-block mx-auto" width="60">
                        </div>

                    </div>
                    <div class="col-6 col-sm-2 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>CSS3</h3>
                            <img src="../portfolio/images/css.png" alt="CSS3" title="CSS3"
                                class="img-fluid d-block mx-auto" width="60">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>Git</h3>
                            <img src="../portfolio/images/git.png" alt="Git" title="Git"
                                class="img-fluid d-block mx-auto" width="60">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>Apache</h3>
                            <img src="../portfolio/images/apache.png" alt="Apache" title="Apache"
                                class="img-fluid d-block mx-auto" width="60">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>Mercado Pago</h3>
                            <img src="../portfolio/images/mp.jpg" alt="Mercado Pago" title="Mercado Pago"
                                class="img-fluid d-block mx-auto" width="60">
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12 mt-3">
                    <h2><i class="fa-solid fa-house-laptop"></i> Experiencia Laboral </h2>
                </div>
                <div class="row shadow rounded bg-white">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2 p-5 my-auto d-none d-sm-block">
                                <img src="../portfolio/images/coto.svg" alt="" class="img-fluid gris">
                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>Empleado</h3>
                                <h4>COTO CICSA</h4>
                                <h5>2015-2021</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat omnis atque deleniti
                                    laboriosam provident unde veniam saepe recusandae, maiores natus quibusdam
                                    laudantium odit ducimus voluptatibus facere animi nemo facilis numquam? Lorem ipsum
                                    dolor sit amet consectetur, adipisicing elit. Iusto mollitia sint ut quis dolorem
                                    natus soluta, fuga placeat dolores repellendus, vel a vero debitis quo et atque
                                    officiis ab odio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi
                                    alias illum sit ipsum modi sequi ipsa, architecto eaque veniam voluptates sint in
                                    non mollitia? Ut debitis eveniet dolor aliquid cum! Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Hic nemo doloribus labore quos deleniti reiciendis
                                    enim ab itaque nobis inventore quas, illum eaque magni architecto vel? Facere quo
                                    nihil sint!</p>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-2 p-5 my-auto d-none d-sm-block">
                                <img src="../portfolio/images/mensajeria.jpg" alt="" class="img-fluid gris">
                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>Coordinador/Fundador</h3>
                                <h4>Mensajeria Zona Oeste</h4>
                                <h5>2021-2022</h5>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, illum omnis
                                    tempore laborum nihil hic itaque a delectus minus non quaerat porro. Dolore nihil
                                    voluptas saepe illo consequuntur nulla quos!Lorem Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Distinctio velit quisquam numquam illum ipsum adipisci
                                    explicabo dolore, consectetur laboriosam aperiam nisi laborum veniam corrupti iste
                                    fugit. Possimus et magni dicta!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </di4>5
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 mt-3">
                    <h2><i class="fa-solid fa-school"></i> Educacion</h2>
                </div>
                <div class="row shadow rounded bg-white">

                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="../portfolio/images/colegio.png" alt="" class="img-fluid">

                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>Titulo Secundario Bachiller</h3>
                                <h4>Liceo Nro 12° Fray Mamerto Esquiu</h4>
                                <h5>2009-2014</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, aperiam veniam
                                    . </p>
                            </div>
                        </div>


                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="../portfolio/images/colegio.png" alt="" class="img-fluid">

                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>Titulo Secundario Bachiller</h3>
                                <h4>Liceo Nro 12° Fray Mamerto Esquiu</h4>
                                <h5>2009-2014</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, aperiam veniam
                                </p>
                            </div>
                        </div>


                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="../portfolio/images/colegio.png" alt="" class="img-fluid">

                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>Titulo Secundario Bachiller</h3>
                                <h4>Liceo Nro 12° Fray Mamerto Esquiu</h4>
                                <h5>2009-2014</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, aperiam veniam
                                </p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
 <!-- curso de desarrollo-->
        </section>
        <section id="cursosdesarrollo" class="container">
            <div class="row">
                <div class="col-12 mt-3">
                    <h2><i class="fa-solid fa-graduation-cap"></i> Cursos de Desarrollo </h2>
                </div>
                <div class="row shadow rounded bg-white">

                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="../portfolio/images/diploma.png" alt="" class="img-fluid">

                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>Desarrollo Full Stack</h3>
                                <h4>DePcSuite</h4>
                                <h5>23/05/22-23/11/22</h5>
                                
                            </div>
                        </div>


                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="../portfolio/images/diploma.png" alt="" class="img-fluid">

                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>Programacion Orientada a Objetos</h3>
                                <h4>EGG</h4>
                                <h5>Expedicion: 2022</h5>
                                
                            </div>
                        </div>


                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="../portfolio/images/diploma.png" alt="" class="img-fluid">

                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>HTML+CSS+JAVASCRIPT</h3>
                                <h4>Lucas Dalto Youtube</h4>
                                <h5>Expedicion: 2022</h5>
                                
                            </div>
                        </div>


                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="../portfolio/images/unlam.png" alt="" class="img-fluid gris">

                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>Programación Web ASP.NET</h3>
                                <h4>Universidad Nacional de La Matanza</h4>
                                <h5>Expedición: dic 2019</h5>
                                
                            </div>
                        </div>


                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="../portfolio/images/utn.jpg" alt="" class="img-fluid gris">

                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>Programa Ejecutivo en Project Management</h3>
                                <h4>Universidad Tecnológica Nacional</h4>
                                <h5>Expedición: may 2018</h5>
                                
                            </div>
                        </div>


                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="../portfolio/images/microsoft.jpg" alt="" class="img-fluid gris">

                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>Programación C# .NET</h3>
                                <h4>Microsoft</h4>
                                <h5>Expedición: dic 2006</h5>
                                
                            </div>
                        </div>


                    </div>
                </div> 
            </div>

        </section>

    <section id="idiomas">
<div class="container">
    <div class="row py-5 mx-0">
        <div class="col-12 col-sm-6 pb-3 pb-sm-0">
            <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
               <div class="col-4 card text-center">
                <i class="fa-brands fa-teamspeak"></i>

               </div>
               <div class="col-8 p-5">
                <h2>IDIOMAS</h2>
                <ul>
                    <li>ESPAÑOL-Nativo</li>
                    <li>INGLES- Basico Oral/Escrito</li>
                </ul>

               </div>
            </div>

        </div>
    
        <div class="col-12 col-sm-6 pb-3 pb-sm-0">
            <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
               <div class="col-4 card text-center">
                <i class="fa-solid fa-dumbbell"></i>
                

               </div>
               <div class="col-8 p-5">
                <h2>HOBBIES</h2>
                <ul>
                    <li>Natacion</li>
                    <li>Gymansio/Musculacion</li>
                </ul>

               </div>
            </div>

        </div>
    </div>
</div>

    </section>


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