<?php

//On récupère les variables du tableau post
$nom = $_POST['firstName'];
$email= $_POST['email'];
$user_message='Une immense librerie à votre disposition';
$message =$message = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Message with Background Image</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            position: relative;
            width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-image: url(\'https://i.pinimg.com/originals/b7/42/9d/b7429d5d5eb7c50f50cf9c8040aa00ce.jpg\'); /* Replace with the absolute URL to your image */
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 8px;
            overflow: hidden;
        }

        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.6); /* Adjust the transparency and color */
            border-radius: 8px;
        }

        h2 {
            margin: 0;
        }

        .footer {
            position: absolute;
            bottom: 10px;
            right: 10px; /* Position to the right */
            text-align: center;
            font-family: \'Dancing Script\', cursive;
            color: white;
        }

        .footer img {
            width: 60px; /* Adjust the width of the image */
            height: auto; /* Maintain aspect ratio */
            margin-top: 10px; /* Adjust margin as needed */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-overlay">
            <h2>Nous édition vous souhaite une bonne éxpérience</h2>
            <p>' . $user_message . '</p>
        </div>

        <div class="footer">
        <p>Equipe Nous</p>
        <p>Zeineb Ben Othman (CEO NOUS EDITIONS)</p>

        <p>Telephone : +2169542489 Email: Zeinebbenothman@email.com</p>
        
        <img src="https://scontent.ftun15-1.fna.fbcdn.net/v/t39.30808-6/277587577_386353796828688_6650999188134237628_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=sou9KemeCBkAX8whsK9&_nc_ht=scontent.ftun15-1.fna&oh=00_AfA6I4RJ0TFVp6tC8mGAb21zmhTs0cm100EkgglA3E7ifg&oe=656E7E56" alt="Equipe Nous Image"> <!-- Replace with the absolute URL to your footer image -->
    </div>
    </div>
</body>
</html>';

//Création du message (La manière dont vous voulez qu'il soit sur votre boite mail. Libre choix à vous pour le style)
$message = "Nom : ".$nom."\n"." Email : ".$email."\n"." message : ".$message;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//On importe les fichiers importants de PHPMailer
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                         //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';    //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
<<<<<<< Updated upstream
    $mail->Username   = 'khaliltriki86@gmail.com'; //SMTP username (email utilisé pour envoyer le formulaire. Il doit etre celui de la validation en deux étapes et de création de mot de passe application !)
    $mail->Password   = 'piywsumrxtywbsth'; // SMTP password (regarder la vidéo pour voir comment avoir ce mot de passe)
=======
    $mail->Username   = 'azizsydma123456789@gmail.com'; //SMTP username (email utilisé pour envoyer le formulaire. Il doit etre celui de la validation en deux étapes et de création de mot de passe application !)
    $mail->Password   = 'itle xkxw ksyo aljw'; // SMTP password (regarder la vidéo pour voir comment avoir ce mot de passe)
>>>>>>> Stashed changes
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;        //Enable implicit TLS encryption
    $mail->Port       = 465;                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Nous Editions');
<<<<<<< Updated upstream
    $mail->addAddress('khalil.triki@esprit.tn');     //Add a recipient
=======
    $mail->addAddress('mohamedaziz.maatoug@esprit.tn');     //Add a recipient
>>>>>>> Stashed changes

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Inscription';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
<<<<<<< Updated upstream
   // header("Location:connexion2.php"); 
=======
   header("Location:connexion2.php"); 
>>>>>>> Stashed changes
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}