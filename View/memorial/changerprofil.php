<?php
session_start();
include '../../Controller/KhalilTriki/ClientC.php';


$error = "";

// create client
$client = null;

// create an instance of the controller
$clientC = new ClientC();
if (
    isset($_POST["idClient"]) &&
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["address"]) &&
    isset($_POST["dob"]) &&
    isset($_POST["email"]) &&
    isset($_POST["password"]) &&
    isset($_POST["telephone"]) 
) {
    if (
        !empty($_POST["idClient"]) &&
        !empty($_POST['firstName']) &&
        !empty($_POST["lastName"]) &&
        !empty($_POST["address"]) &&
        !empty($_POST["dob"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["password"]) &&
        !empty($_POST["telephone"])

    ) {
        $client = new Client(
            $_POST['idClient'],
            $_POST['firstName'],
            $_POST['lastName'],
            $_POST['address'],
            new DateTime($_POST['dob']),
            $_POST['email'],
            $_POST['password'],
            $_POST['telephone']
            

        );
        $clientC->updateClient($client, $_POST["idClient"]);
        header('index.php');
    } else
        $error = "Missing information";
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
      <title>Profil</title>
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
                                 <li > <a href="index.php">Home</a> </li>
                                 
                                 <li><a href="books - Copie.php">Our Books</a></li>
                                 <li > <a href="http://127.0.0.1:5000">ChatBot</a> </li>
                                 <li><a href="reclamationC.php">Reclamer</a></li>
                                 <li><a href="contribution.php">Contribuer</a></li>
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
                     <h2>Profil</h2>
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
                     <span>Modifier votre profil en toute sécurité</span>
                  </div>
               </div>
            </div>
            <div class="row border">
               <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                  <div class="about-box">
                  <?php
    if (isset($_SESSION['idClient'])) {
        $client = $clientC->showClient($_SESSION['idClient'] );

    ?>

<form action="" method="POST" id="myForm">
    <table  align="center">
        <tr>
            <td>
                <label for="idClient">Id Client:</label>
            </td>
            <td><input type="text" name="idClient" id="idClient" value="<?php echo $client['idClient']; ?>" maxlength="20" readonly></td>
        </tr>
        <tr>
            <td>
                <label for="firstName">First Name:</label>
            </td>
            <td><input type="text" name="firstName" id="firstName" value="<?php echo $client['firstName']; ?>" maxlength="20"></td>
        </tr>
        <span id="error"></span>
        <tr>
            <td>
                <label for="lastName">Last Name:</label>
            </td>
            <td><input type="text" name="lastName" id="lastName" value="<?php echo $client['lastName']; ?>" maxlength="20"></td>
        </tr>
        <tr>
            <td>
                <label for="address">Address:</label>
            </td>
            <td>
                <input type="text" name="address" value="<?php echo $client['address']; ?>" id="address">
            </td>
        </tr>
        <tr>
            <td>
                <label for="dob">Date of Birth:</label>
            </td>
            <td>
                <input type="date" name="dob" id="dob" value="<?php echo $client['dob']; ?>" max="2010-01-01">
            </td>
        </tr>
        <tr>
            <td>
                <label for="email">Email:</label>
            </td>
            <td>
                <input type="email" name="email" id="email" value="<?php echo $client['email']; ?>" maxlength="50">
            </td>
        </tr>
        <tr>
            <td>
                <label for="password">Password:</label>
            </td>
            <td>
                <input type="password" name="password" id="password" value="<?php echo $client['password']; ?>" maxlength="50">
            </td>
        </tr>
        <tr>
            <td>
                <label for="telephone">télèphone:</label>
            </td>
            <td>
                <input type="text" name="telephone" id="telephone" value="<?php echo $client['telephone']; ?>" maxlength="50">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Update">
            </td>
            <td>
                <input type="reset" value="Reset">
            </td>
        </tr>
    </table>
</form>

    <?php
    }
    ?>



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
     
   </body>
</html>