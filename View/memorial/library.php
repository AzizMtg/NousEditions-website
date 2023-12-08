<?php
include '../../Controller/Siwar/LivresC.php';


    $error = "";
    $mess = "" ; 

      //////lhne 3malna recuperation par id lel livre li bch nchoufou details mt3ou

    $LivreC=new LivreC();
    if(isset($_GET['idL'])) 
    {
        $livreid=$_GET['idL'];
    }
    else{
        $livreid=2;
    }
    
    $livre=$LivreC->RecupererLivres($livreid);      
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
      <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css1/style.css" rel="stylesheet">
      <title>memorial books</title>
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
                                 <li> <a href="about.html">About us</a> </li>
                                 <li><a href="books.html">Our Books</a></li>
                                 <li class="active"><a href="library.html">library</a></li>
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
      <div class="about-bg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="abouttitle">
                     <h2>Our Library</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>



      
      <!-- Library -->

      <div class="Library">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">

               
                        <!-------------jebna les attributs les hachetna bch naffichiwhom---------------->
                        <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="" class="carousel slide" data-ride="carousel">
                        <div class="">
                        <img style="max-width: 100%;max-height=100%" src="../soft-ui-dashboard-main/Livres/image/<?php echo $livre['couverture']; ?>">
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h1 class="font-weight-semi-bold"><i><?php echo $livre['nom']; ?></i></h1>
                <p class="font-weight-semi-bold">Nom Auteur : <?php echo $livre['auteur']; ?></p>
                <br>
                <p class="font-weight-bold">Prix:</p>
                <h3 class="font-weight-semi-bold mb-4"><del><?php echo $livre['prix']; ?></del>TND</h3>
                <h1 style="color : red ;" class="font-weight-semi-bold mb-4"><?php
          $promotion = $LivreC->Recupererpromotion($livre['idP']);
          $taux = $promotion['tauxRemise'];
          $prixWithDiscount = $livre['prix'] * (1 - $taux / 100);
          $hasDiscount = $taux > 0;
          echo "<td" . ($hasDiscount ? " class='discounted-price'" : "") . ">$prixWithDiscount </td>";
          ?>TND</h1>
                <p class="mb-4"><h2>Description Livre : </h2> <?php echo $livre['description']; ?></p>

                <div class="d-flex align-items-center mb-4 pt-2">
                    <div class="input-group quantity mr-3" style="width: 130px;">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-minus" >
                            <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control bg-secondary text-center" value="1">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-plus">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i>Ajouter au Panier</button>
                    <div class="col-sm-3 d-grid">
                 <a class="btn btn-primary" href="books.php" role="button">Retour</a>
             </div>
                </div>
                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    
                           </div>
                       </div>
      <!-- end Library -->
      <!-- footer -->
      <br>
      <br>
      
             

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