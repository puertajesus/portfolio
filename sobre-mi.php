<?php $pg="sobremi";?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
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
    <div class="container">
       <header id=sobre-mi>
           <?php
           include_once ("menu.php");
           ?>
        </header>
        <section id="sobre-mi">
            <div class="row mt-5">
                <div class="col-sm-7 col-12">
                    <h1>Sobre mí</h1>
                    <h2>Ecuánime, atento a los nuevos retos de la tecnología y su utilización para proyectos. Soy Ingeniero
                    de Sistemas.
                    </h2>
                    <a href="file/cv-jesus-puerta.pdf" class="btn my-4" target="_blank">Descargar CV</a>
                </div>
                <div class="col-sm-3 col-9 mx-5">
                    <img src="images/jesus-puerta.jpg" alt="Jesús Ramón Puerta Gómez" title="Jesús Ramón Puerta Gómez"
                    class="img-fluid img-circle">
                </div>
            </div>
            <div class="row my-sm-4 my-3">
                <div class="col-sm-6 col-12 px-2 my-2">
                    <div class="bg-white">
                        <div class="p-3">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="row px-3">
                            <div class="col-12">
                                <h3>TECNOLOGIAS</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                           <div class="col-12">
                              <p> CCNA1 V5.0, CCNA2 V5.0, CCNA3 V5.0, CCNA4 V5.0, HTML, CSS, Bootstrap.</p>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 px-2 my-2">
                    <div class="bg-white">
                       <div class="p-3"><i class="fa fa-laptop" aria-hidden="true"></i>
                       </div>
                        <div class="row px-3">
                            <div class="col-12">
                              <h3>SOFTWARE</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                             <p> Visual Code, Packet Trace, Word, Excel, MySQL.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 px-2 my-2">
                    <div class="bg-white">
                        <div class="p-3"><i class="fas fa-language"></i>
                        </div>
                        <div class="row px-3">
                            <div class="col-12">
                                <h3>IDIOMAS</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                                <p>INGLES - Avanzado<br>ESPAÑOL - Nativo<br>PORTUGÉS - Básico</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 px-2 my-2">
                    <div class="bg-white">
                      <div class="p-3"><i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                      </div>
                      <div class="row px-3">
                            <div class="col-12">
                                <h3>HOBBIES</h3>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12">
                                 <p>Senderismo,Correr.</p>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section id="experiencia">
        <div class="container py-sm-5 py-4">
            <div class="row">
                <div class="col-12 py-4">
                    <h2>Formación Académica</h2>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-12 col-sm-2">
                    <h3>2020 DePsuite</h3>
                </div>
                <div class="col-12 col-sm-2">
                    <h3>Desarrollador Web Full Stack</h3>
                </div>
                <div class="col-12 col-sm-8">
                    <h4>Tarea<br>xxxxxxxxxxxxxx<br>xxxxxxxxxxxxxx<br>xxxxxxxxxxxxxx<br></h4>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-12 col-sm-2">
                   <h3>2014 – 2020 - xxxx</h3>
                </div>
                 <div class="col-12 col-sm-2">
                   <h3>Nombre del Puesto<br>Empresa</h3>
                </div>
                <div class="col-12 col-sm-8">
                  <h4>Tarea<br>xxxxxxxxxxxxxx<br>xxxxxxxxxxxxxx<br>xxxxxxxxxxxxxx<br></h4>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <?php
                include_once ("footer.php");
           ?>
        </div>
       
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
    </script>
    <script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>