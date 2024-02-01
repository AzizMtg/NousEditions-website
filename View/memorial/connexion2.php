<?php
session_start();
include '../../Controller/KhalilTriki/ClientC.php';

<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
// Inclure la configuration de la base de données
//include('config.php'); // Assurez-vous de créer ce fichier avec les informations de connexion à la base de données

// Inclure la classe Client
//include('Client.php');

// Vérifier si le formulaire de connexion a été soumis
$message='';
if(isset($_POST["connexion"]))
{echo 'salut';
   $email=$_POST["email"];
   if(empty($_POST["email"]) || empty($_POST["password"])){
   $message= "<div class='alert alert-danger'>les deux champs sont requis";
   echo 'erreur dans la';


   }
   else
   {$db = config::getConnexion();
      $query="SELECT * From client WHERE email = :email";
      $statement=$db->prepare($query);
      $statement->execute(array('email'=>$_POST["email"]));
      $count=$statement->rowCount();
      if($count>0)
      {//$clientData = mysqli_fetch_array (PDO::FETCH_ASSOC);
        //$_SESSION['IdClient'] = $clientData['IdClient'];
         $result =$statement->fetchALL();
         foreach($result as $row){
            if(password_verify($_POST["password"],$row["password"])){
               //setcookie("type",$row["user_type"],time()+3600);
<<<<<<< Updated upstream
               $_SESSION['email']=$email;
               
               if ($row['stat'] == 1) {
                  // Redirect to the admin page
                  header("Location: ../View/ListClients.php");
              } elseif ($row['stat'] == 0) {
                  // Redirect to the client home page
=======
              
               $_SESSION['email']=$email;
               $_SESSION['idClient']=$row['idClient'];
               //address
               $_SESSION['address']=$row['address'];
               $_SESSION['firstName']=$row['firstName'];
               
               if ($row['stat'] == 1) {
                  // Redirect to the admin page
                  header("Location: ../soft-ui-dashboard-main/pages/ListClients.php");
              } elseif ($row['stat'] == 0) {
                  // Redirect to the client home page
                  
>>>>>>> Stashed changes
                  header("Location: index.php");
              }


            }
            else{
              $message= "<div class='alert alert-danger'> mot de passe incorrect";
            }
         }

      }
      else{
         $message= "<div class='alert alert-danger'>email incorrect";
         echo 'erreur email';
      }

   

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
      <title>Connexion</title>
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
<<<<<<< Updated upstream
=======
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

      <link rel="stylesheet" href="styleSignIN.css">


      <style>
         .inba3adhom
         {
            margin:30px;
         }
         
      </style>
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                                 <li > <a href="index.html"></a> </li>
                                 <li class="active"> <a href="about.html"></a> </li>
                                 <li><a href="books.html"></a></li>
                                 <li><a href="library.html"></a></li>
                                 <li><a href="contact.html"></a></li>
=======
                                
                                 <li><a href="librairievisit.php" >Consulter Notre Librairie</a></li>
                               
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                     <h2>Connexion</h2>
=======
                     <h2>Bienvenue a Nous Editions</h2>
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                     <span>Bienvenu dans nous editions</span>
=======
                     <span>Veuiller vous connecter</span>
>>>>>>> Stashed changes
                     
                  </div>
               </div>
            </div>
            <div class="row border">
               <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                  <div class="about-box">
                  <span><?php echo $message; ?><span>
                  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<<<<<<< Updated upstream
                        <div>
                            <label for="email">E-mail :</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div>
                            <label for="password">Mot de passe :</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div>
                            <input type="submit" id="coonexion" name="connexion" value="connexion">
                        </div>
                        <div >
                                
                                <a href="recover_psw.php" >
                                    Mot de passe oublié?
                                </a>
                            </div>
=======
                        <div class="inba3adhom">
                            <label for="email">E-mail :</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div  class="inba3adhom">
                            <label for="password">Mot de passe :</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6Lc39SkpAAAAAP-FT1PljMvg1u5jaHBKQgqUcm0T" style="margin-left: 170px;"></div>
                        </div>
                        <div>
                            <input type="submit" id="coonexion" name="connexion" value="connexion" class="btn">
                        </div>
                       

                        <div >
                                
                                <a href="recover_psw.php" class="btn"  >
                                    Mot de passe oublié?
                                </a>
                            </div>



                            <div  >
                                
                                <a href="utilisateur.php"  class="btn" >
                                    inscription
                                </a>
                            </div>
>>>>>>> Stashed changes
                    </form>
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
<<<<<<< Updated upstream
         <div class="copyright">
            <div class="container">
               <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
         </div>
=======
        
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
</html>
=======
</html>
<script>
$(document).on('click','#coonexion',function(){
   var response =grecaptcha.getResponse();
   if(response.length==0){
      alert("Merci de verifier si tu n'est pas un robot");
      return false;
   }
});
</script>
>>>>>>> Stashed changes
