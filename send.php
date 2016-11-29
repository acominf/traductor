<?php
/** **********************************************************************************************************
 * sendMail.php - ENVIAR CORREO - 
 *
 * Envía los correos correspondientes a los formularios del sitio EMPRESA
 ********************************************************************************************************** */

// DATOS DEL FORMULARIO
$nombre = strip_tags($_POST['nombre']);
$mensaje = strip_tags($_POST['mensaje']);
$telefono = strip_tags($_POST['tel']);
$email = strip_tags($_POST['email']);


//$thanks_path = $_POST['thanks_path'];
//$output_path = $_POST['output_path'];


$subject = "Correo de contacto. QMI - APPS";

$fecha   = date("Y-m-d H:i:s");

$body = "<h3>Nombre de Contacto: " . $nombre . "</h3>";
$body .= "<b> Fecha: </b>" . $fecha;
$body .= "<br/> <b> Teléfono: </b>" . $telefono;
$body .= "<br/> <b>Email:</b> " . $email;
$body .= "<br/><b>Mensaje: </b> " . $mensaje;

//$body .= "<br/> <br/> <b>URL de emisión:</b> " . $output_path;


sendMail($subject, $body);


/*
			ENVIO DEL CORREO
*/
function sendMail($subject, $body, $file_to_attach = null){

    require_once('class.phpmailer.php');
    require_once('class.smtp.php');


    $mail = new PHPMailer();
    $mail->SMTPDebug = 0;
    $mail->IsSMTP();
    $mail->Mailer = 'smtp';
    $mail->SMTPAuth = true;
    $mail->Host = "mail.qmarketing.mx";
    $mail->Port = 465;// 587;//465; // 25;
    $mail->SMTPSecure = 'ssl';//"ssl";//'tls';                            // Enable TLS encryption, `ssl` also accepted

    // Codificación para que salgan los acentos
    $mail->ContentType = "text/html";
    $mail->CharSet = "UTF-8";

    $mail->Username = "contacto@qmarketing.mx";
    $mail->Password = "Qmi1683346";

    $mail->IsHTML(true); // if you are going to send HTML formatted emails
    $mail->SingleTo = false; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

    $mail->From = "contacto@qmarketing.mx";
    $mail->FromName = "QMI-Apps";


    //$mail->addAddress("juancarlosddl@gmail.com","");
    $mail->AddBCC("karla@qmarketing.mx","");
    $mail->AddBCC("kerulo@me.com","");
    $mail->addBCC("everardopalmero@gmail.com","");
    $mail->addBCC("contacto@qmarketing.mx","");



    $mail->Subject = $subject;
    $mail->Body = $body;

    $response = (object)[];
    if($mail->Send()){
        $response->success = true;
        header('Location: gracias.html');

    }
    else{
        $response->success = false;
    }


}

//~h9Im%9I4lJE
?>