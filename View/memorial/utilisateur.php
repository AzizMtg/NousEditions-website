<?php

<<<<<<< Updated upstream
//include '../Controller/ClientC.php';
include '../../Controller/KhalilTriki/ClientC.php';
=======
include '../../Controller/KhalilTriki/ClientC.php';


>>>>>>> Stashed changes
$error = "";

// create client
$client = null;

// create an instance of the controller

$clientC = new ClientC();
if (
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["address"]) &&
    isset($_POST["dob"]) &&
    isset($_POST["email"]) &&
    isset($_POST["password"]) &&
    isset($_POST["telephone"]) 
) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $telephone = $_POST['telephone'];
   

    if (
        !empty($firstName) &&
        !empty($lastName) &&
        !empty($address) &&
        !empty($dob) &&
        !empty($email) &&
        !empty($password) &&
        !empty($telephone) 
        


    ) {
        // Vous pouvez également effectuer une validation plus poussée des données ici

        $client = new Client(
            null,
            $firstName,
            $lastName,
            $address,
            new DateTime($dob),
            $password=password_hash($password,PASSWORD_DEFAULT),
            $email,
            $telephone,
            0

            
        );

        $clientC->addClient($client);
<<<<<<< Updated upstream
        //header('Location: ListClients.php');
=======
        
        header('Location:traitement.php');
>>>>>>> Stashed changes
    } else {
        $error = "Missing information";
    }
}

?>





<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Inscription</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
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
                                 <li > <a href="index.html">Home</a> </li>
                                 <li class="active"> <a href="about.html">About us</a> </li>
                                 <li><a href="books.html">Our Books</a></li>
                                 <li><a href="library.html">library</a></li>
                                 <li><a href="contact.html">Contact us</a></li>
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
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <!-- about -->
      <div class="about-bg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="abouttitle">
                     <h2>Inscription</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="aboutheading">
                     <span>S'inscrire a Nous editions est un vers un nouvel univers</span>
                  </div>
               </div>
            </div>
            <div class="row border">
               <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                  <div class="about-box">
                     <h2>Inscription</h2>
                     <form action="" method="POST" id="myForm">
<<<<<<< Updated upstream
        <table border="1" align="center">
=======
        <table  align="center">
>>>>>>> Stashed changes

            <tr>
                <td>
                    <label for="firstName">First Name:</label>
                </td>
                <td><input type="text" name="firstName" id="firstName" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="lastName">Last Name:</label>
                </td>
                <td><input type="text" name="lastName" id="lastName" maxlength="20"></td>
            </tr>
            <tr>
                
                <td>
                    <label for="address">Address:</label>
                </td>
                <td>
                    <input type="text" name="address" id="address">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="dob">Date of Birth:</label>
                </td>
                <td>
<<<<<<< Updated upstream
                    <input type="date" name="dob" id="dob">
=======
                    <input type="date" name="dob" id="dob"  max="2010-01-01">
>>>>>>> Stashed changes
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email:</label>
                </td>
                <td>
                    <input type="email" name="email" id="email" maxlength="50">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password:</label>
                </td>
                <td>
                    <input type="password" name="password" id="password" maxlength="50">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="telephone">télèphone:</label>
                </td>
                <td>
                    <input type="text" name="telephone" id="telephone" maxlength="50">
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="submit" value="s'inscrire">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <script>
        let myForm=document.getELementByID('myForm');
        myForm.addEventListener('submit',function(e){
            let my
        }

        );
    </script> 



                  </div>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                  <div class="about-box">
                     <figure><img src="images/about.png" alt="img" /></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- end about -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="Follow">
                        <h3>Follow Us</h3>
                     </div>
                     <ul class="location_icon">
                        <li> <a href="#"><img src="icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                        <li> <a href="#"><img src="icon/instagram.png"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                     <div class="Follow">
                        <h3>Newsletter</h3>
                     </div>
                     <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                     <button class="Subscribe">Subscribe</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
<<<<<<< Updated upstream
=======
      <script>
    document.addEventListener('DOMContentLoaded', function () {
        let myForm = document.getElementById('myForm');

        myForm.addEventListener('submit', function (e) {
            // Empêcher la soumission du formulaire en cas d'échec de la validation
            if (!validateForm()) {
                e.preventDefault();
            }
        });

        function validateForm() {
            let firstName = document.getElementById('firstName').value.trim();
            let lastName = document.getElementById('lastName').value.trim();
            let address = document.getElementById('address').value.trim();
            let dob = document.getElementById('dob').value.trim();
            let email = document.getElementById('email').value.trim();
            let password = document.getElementById('password').value.trim();
            let telephone = document.getElementById('telephone').value.trim();

            if (firstName === '') {
                alert('Veuillez entrer votre prénom');
                return false;
            }

            if (!isAlphabetic(firstName)) {
                alert('Le prénom ne doit contenir que des lettres');
                return false;
            }

            if (lastName === '') {
                alert('Veuillez entrer votre nom de famille');
                return false;
            }

            if (!isAlphabetic(lastName)) {
                alert('Le nom de famille ne doit contenir que des lettres');
                return false;
            }

            if (address === '') {
                alert('Veuillez entrer votre adresse');
                return false;
            }
            

            if (dob === '') {
                alert('Veuillez entrer votre date de naissance');
                return false;
            }

            if (email === '') {
                alert('Veuillez entrer votre adresse e-mail');
                return false;
            }

            if (password === '') {
                alert('Veuillez entrer votre mot de passe');
                return false;
            }
            if (telephone === '') {
                alert('Veuillez entrer votre télèphone');
                return false;
            }
            // Ajoutez ici des règles de validation pour la date de naissance, le téléphone et le mot de passe
            // Par exemple, vous pouvez vérifier le format de la date de naissance, la longueur du téléphone, etc.

            return true; // Le formulaire est valide
        }

        function isAlphabetic(str) {
            // Vérifie si la chaîne ne contient que des lettres
            return /^[a-zA-Z]+$/.test(str);
        }
    });
</script>
>>>>>>> Stashed changes
   </body>
</html>