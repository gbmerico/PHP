<?php

require_once('src/Exception.php');
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);
$phpversion = phpversion();

if(isset($_POST['email']) && !empty($_POST['email'])){

    //variaveis com as 'names' do form
    $name = addslashes($_POST['name']); 
    $email = addslashes($_POST['email']); 
    $message = addslashes($_POST['message']); 

    //para quem?
    $to = "gbmericomails@gmail.com";

    try {

        //ligaçao para o servidor SMTP do gmail
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP(); 
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'gbmericomails@gmail.com';
        $mail->Password = '@212629a';
        $mail->Port = 587;

        //de quem?
        $mail->setFrom($email);

        //para quem?
        $mail->addAddress($to);

        $mail->isHTML(true);
        
        //sub-titulo da messagem
        $mail->Subject="HELP!";

        //corpo do email
        $mail->Body= "---<br>".    
                        "Olá, sou <strong>".$name."</strong>, meu e-mail: ".$email."<br>".
                        "PHP VERSION: ".$phpversion."<br>".                      
                     "---<br>".
                        $message;

        echo "<center> EMAIL enviado! </center>";

    } catch (Exception $error) {
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }
   
}

?>