
<?php

$nom = $_POST['nom'] ; 
$prenom = $_POST['prenom'] ; 
$email = $_POST['email'] ; 
$suijet = $_POST['suijet'] ; 
$textarea = $_POST['textarea'] ;

$message = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reclamation Form Submission</title>
        <style>
        body {
            font-family: "Merriweather", serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-image: linear-gradient( to right ,red, rgb(27, 26, 26));
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h2 {
            color: black;
            text-align: center;
        }
        p {
            margin: 10px 0;
        }
        strong {
            color: black;
            paddint : 30px ; 
        }
    </style>
</head>
</head>
<body>
    <div class="email-container">
        <h2>Reclamation</h2>
        <p><strong>Nom:</strong> ' . $nom . '</p>
        <p><strong>Prenom:</strong> ' . $prenom . '</p>
        <p><strong>Email:</strong> ' . $email . '</p>
        <p><strong>Suijet:</strong> ' . $suijet . '</p>
        <p><strong>Textarea:</strong> ' . $textarea . '</p>
    </div>
</body>
</html>';


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php' ; 
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'naanaachaima02@gmail.com';                     //SMTP username
    $mail->Password   = 'dsxf uzms vtfj nvjw';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Reclamation');
    $mail->addAddress('chaima.naanaa@esprit.tn');     //Add a recipient
 

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Reclamation ';
    $mail->Body    = $message ;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();


    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        
        <title>Reclamation</title>
        <link rel="stylesheet" href="reclamationCstyle.css"> <!--he8i a3maltha ana lil reclamation-->
    </head>
    <body>
        <header>
            <!-- header inner -->
            <div class="header">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                           <div class="limit-box">
                              <nav class="main-menu">
                                 <ul class="menu-area-main">
                                    <li class="active"> <a href="index.html">Home</a> </li>
                                    <li> <a href="about.html">About us</a> </li>
                                    <li><a href="books.html">Our Books</a></li>
                                    <li><a href="library.html">library</a></li>
                                    <li><a href="contribution.html">Contribuer</a></li>
                                    <li class="mean-last"> <a href="#"><img src="images/search_icon.png" alt="#" /></a> </li>
                                    <li class="mean-last"> <a href="#"><img src="images/top-icon.png" alt="#" /></a> </li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>      
            <!-- end header inner -->
         </header>
         <br><br><br>
    <!--  -->
         <div class="reclamation-bg">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <div class="reclamationtitle">
                        <h2>Reclamation</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <section >
            <div class="reclamation-box">
                <div class="reclamation-left">
                    <h3 >Message has been sent check your email</h3>
                </div>   
            <div>    
        </section>
    
      
          <!-- footer -->
          <footer>
            <div class="footer">
               <div class="container">
                  <div class="row pdn-top-30">
                     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="Follow2">
                           <h3>Follow Us</h3>
                        </div>
                        <ul class="location_icon2">
                           <li> <a href="#"><img src="icon/facebook.png"></a></li>
                           <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                           <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                           <li> <a href="#"><img src="icon/instagram.png"></a></li>
                        </ul>
                     </div>
                     
                  </div>
               </div>
            </div>
           
         </footer>
        
       
    </body>
    </html>';




} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>



