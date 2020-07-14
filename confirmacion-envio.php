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
        
    <header >
        <?php
           include_once ("menu.php");
        ?>
    </header>
               
    <section id="envio" >
        <div class="container-en mb-10">
           <div class="row ">
                <div class="col-12 ">
                    <h1>Gracias: <?php.$_POST['text']?> por <br> contactarte,</h1>
                </div>

            </div>
            <div class="row ">
                <div class="col-12  ">
                    <h2>te responderé a la brevedad.</h2>
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