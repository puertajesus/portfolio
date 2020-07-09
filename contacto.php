<?php $pg="contacto";?>
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
        
    <header id=contacto>
        <?php
           include_once ("menu.php");
        ?>
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