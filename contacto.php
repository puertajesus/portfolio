<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:100,200,300,400,500,600,700,800,900&display=swap">
    <link rel="stylesheet" href="ccs/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="ccs/estilos.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link " href="index.php" title="Inicio"> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="sobre-mi.php" title="Sobre mí">Sobre mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="proyectos.php"title="Proyectos" >Proyectos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href="contacto.php"title="Contacto"  >Contacto</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <section id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-12 py 5">
                    <h1>¡Trabajemos juntos!</h1>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <h2>Para mas detalles sobre mí<br>
                        trabajo podés ver mi <a href="https://www.linkedin.com" target="_blank"> Linkedin</a>,<br>
                        descargar mi <a href="file/cv-jesus-puerta.pdf" target="_blank">CV</a>  o mandarme<br>
                        un <a href="#formulario"> mensaje</a>
                    </h2>
                </div>
            </div>

            <div class="row" id="formulario">
                <div class="col-12 col-ms-10">
                    <form action="" method="POST">
                        <div class="row pt-5">
                            <div class="col-sm-6 col-12 py-2">
                                <input type="text" placeholder="NOMBRE" class="form-control">
                            </div>
                            <div class="col-sm-6 col-12 py-2">
                                <input type="email" placeholder="CORREO" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-4">
                                <input type="text" placeholder="ASUNTO" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-12 pb-4 ">
                                <textarea placeholder="MENSAJE" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="my-2 text-center">
                            <button type="submit" class="btn">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row my-0">
                <div class="col-sm-4 col-12 text-sm-left text-left py-0">
                    <a href="index.php">Todos los derechos reservados<br>2020</a>
                </div>
                <div class=" col-sm-4 col-12 text-center text-sm-center py-0 my-sm-0">
                    <a href="https://api.whatsapp.com/send?phone=5492213644482&text=Hola" target="_blank" class="img-cicle" ><i
                            class="fab fa-whatsapp"></i></a>
                            <a href="https://github.com/puertajesus" target="_blank" class="img-cicle"><i class="fab fa-github"></i></a>
                    <a href="https://www.instagram.com " target="_blank" class="img-cicle"><i class="fab fa-instagram-square"></i></a>
                    <a href="https://www.linkedin.com/in/jesus-puerta-a76b3695" target="_blank"class="img-cicle"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-sm-4  col-12 text-sm-right text-center text-right py-0">
                    Patrocinado por<br><a href="https://depcsuite.com" target="_blank">DePC Suite</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>