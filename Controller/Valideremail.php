

<?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'chaimaC/PHPMailer/src/Exception.php';
require 'chaimaC/PHPMailer/src/PHPMailer.php';
require 'chaimaC/PHPMailer/src/SMTP.php';

// Check if form is submitted and the 'Valider' button is clicked
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the entered user message
    $user_message = $_POST['user_message'];
    
    // Get the recipient's email (receiver email)
    $receiver_email = $_POST['receiver_email'];
    $message = '
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
                <h2>Nos remerciements de la part de toute lequipe NOUS EDITIONS</h2>
                <p>' . $user_message . '</p>
            </div>

            <div class="footer">
            <p>Equipe Nous</p>
            <p>Zeineb Ben Othman (CEO NOUS EDITIONS)</p>

            <p>Telephone : +2169542489 Email: Zeinebbenothman@email.com</p>
            
<<<<<<< Updated upstream
            <img src="https://scontent.ftun15-1.fna.fbcdn.net/v/t39.30808-6/277587577_386353796828688_6650999188134237628_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=sou9KemeCBkAX8whsK9&_nc_ht=scontent.ftun15-1.fna&oh=00_AfA6I4RJ0TFVp6tC8mGAb21zmhTs0cm100EkgglA3E7ifg&oe=656E7E56" alt="Equipe Nous Image"> <!-- Replace with the absolute URL to your footer image -->
=======
            <img src="https://scontent.ftun10-1.fna.fbcdn.net/v/t39.30808-6/277587577_386353796828688_6650999188134237628_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=FkP14v8uOhoAX8KkzW0&_nc_ht=scontent.ftun10-1.fna&oh=00_AfDX1BhFfVn3SsSpVDDo_qxDCPZ6UVeL5sMPTUAFEBN2DA&oe=65804A96" alt="Equipe Nous Image"> <!-- Replace with the absolute URL to your footer image -->
>>>>>>> Stashed changes
        </div>
        </div>
    </body>
    </html>';
    
     //hadha n7ot fih html
    
    // Include PHPMailer
    $mail = new PHPMailer();

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'azizsydma123456789@gmail.com'; // Your Gmail email address
        $mail->Password = 'itle xkxw ksyo aljw
        '; // Your Gmail password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Sender and recipient(s)
        $mail->setFrom('from@example.com', 'NousEditionsContact');
        $mail->addAddress($receiver_email);
        //$mail->addAddress($receiver_email);

        // Email subject and content
        $mail->isHTML(true);
        $mail->Subject = 'Felicitations Votre Contribution est valide!';
        $mail->Body = $message;
       

        // Send the email
        if ($mail->send()) {
            
            //echo 'Email sent successfully!';
            header("Location: congratsmail.html");
        } else {
            echo 'Failed to send email. Error: ' . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>