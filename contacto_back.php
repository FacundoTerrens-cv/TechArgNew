<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
if (isset($_POST["submit"])) {
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $asunto = $_POST['subject'];
    $mensaje = $_POST['message'];

                $mail = new PHPMailer(true);
                    try {
                        //Server settings
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'techargbrc@gmail.com';                     //SMTP username
                        $mail->Password   = '42818490';                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                        //Recipients
                        $mail->setFrom('techargbrc@gmail.com', 'Webii');
                        $mail->addAddress('techargbrc@gmail.com', 'Webii');     //Add a recipient 
                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Consulta Cliente'.$asunto.'';
                        $mail->Body    = 'Datos del cliente <br>
                                            Nombre: '.$nombre.'<br>
                                            Email: '.$email.'<br>
                                            Asunto: '.$asunto.'<br>
                                            Mensaje: '.$mensaje.'<br>';
                        $mail->send();
                    }catch (Exception $e) {
                        echo "error: {$mail->ErrorInfo}";
                    }
                    header("Location: contacto.html");
}


?>