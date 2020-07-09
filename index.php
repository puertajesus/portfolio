<?php $pg = "inicio" ;?>
<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Inicio</title>
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
    <div id="inicio" class="container">
        <header id=contacto>
            <?php
                include_once ("menu.php");
                
            ?>
        </header>
        <div class="container">
            <section>
                <div class="row py-5 ">
                    <div class="col-12">
                        <h1>Hola!<br> Soy Jesús Ramón Puerta Gómez
                        </h1>
                        <h2>DESARROLLADOR FULL STACK</h2>
                        <a href="proyectos.php" class="btn mt-sm-4">MIRÁ MI TRABAJO!</a>
                    </div>
                </div>
            </section>
         </div>
    </div>
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