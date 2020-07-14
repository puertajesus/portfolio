<?php $pg="contacto";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once "PHPMailer/src/SMTP.php";
include_once "PHPMailer/src/PHPMailer.php";

$msg = "";

function guardarCorreo($correo)
{
    $archivo = fopen("mails.txt", "a+");
    fwrite($archivo, $correo . ";\n\r");
    fclose($archivo);
}

if ($_POST) { /* es postback */

    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $asunto = $_POST["txtAsunto"];
    $mensaje = $_POST["txtMensaje"];

    if ($nombre != "" && $correo != "") {
        guardarCorreo($correo);

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "mail.jesuspuerta.com.ar"; // SMTP a utilizar. Por ej. mail.dominio.com.ar
        $mail->Username = "info@jesuspuerta.com.ar"; // Correo completo a utilizar
        $mail->Password = "aqui va la clave de tu correo";
        $mail->Port = 25;
        $mail->From = "info@jesuspuerta.com.ar"; // Desde donde enviamos (Para mostrar)
        $mail->FromName = "Jesús Ramón Puerta Gómez";
        $mail->IsHTML(true);
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ),
        );

        //Destinatario
        $mail->addAddress($correo);
        //$mail->addBCC("nelson.tarche@gmail.com");
        $mail->Subject = "Contacto página web";
        $mail->Body = "Recibimos tu consulta, <br>te responderemos a la brevedad.";
        //  if(!$mail->Send()){
        //     $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
        //   }
        $mail->ClearAllRecipients(); //Borra los destinatarios

        //Nosotros
        $mail->addAddress("puertajesus07@gmail.com");
        $mail->Subject = "Recibiste un mensaje desde tu página web";
        $mail->Body = "Te escribió $nombre cuyo correo es $correo, con el asunto $asunto y el siguiente mensaje:<br><br>$mensaje";

       // if ($mail->Send()) {
        if ((1==1)) {
            header('Location: confirmacion-envio.php');
        } else {
            $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
        }
    } else {
        $msg = "Complete todos los campos";
    }

}
?>
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
    <?php if (isset($msg) && $msg != ""): ?>
    <div class="row">
        <div class="col-12">
            <div class="alert alert-danger" role="alert">
            <?php echo $msg; ?>
            </div>
        </div>
    </div>
    <?php endif;?>
                       
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
                                            <input type="text" name="txtNombre" placeholder="NOMBRE" class="form-control">
                                        </div>
                                        <div class="col-sm-6 col-12 py-2">
                                             <input type="email" name="txtCorreo" placeholder="CORREO" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 pt-4">
                                            <input type="text" name="txtAsunto" placeholder="ASUNTO" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-12 pb-4 ">
                                            <textarea placeholder="MENSAJE" name="txtMensaje" class="form-control"></textarea>
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