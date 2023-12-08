<?php
	include '../../Controller/Siwar/LivresC.php';
   //include '../soft-ui-dashboard-main/Livres/image';


    $LivreC = new LivreC();



    if (isset($_GET['search'])) {
      $listeLivres = $LivreC->Recherche($_GET['search']);
  } elseif (isset($_GET['tr'])) {
      $listeLivres = $LivreC->TriNom();
  }
  else {
    $listeLivres=$LivreC->AfficherLivres(); 
  }


	 
   
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- books siwar -->

<!-- l3onwen  -->


<style>



    @import url('https://fonts.googleapis.com/css2?family=Laurel+Comics|Comic+Sans+MS&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Daniel&display=swap');

    


    
.red-bordeaux-text {
            color: #800020; /* Code couleur pour le rouge bordeaux */
            font-size: 18px; /* Taille de la police */
            font-family: 'Votre Police', sans-serif; /* Remplacez 'Votre Police' par le nom de votre police */
        }

        
      

.black-daniel-text {
    color: black; /* Couleur noire */
    font-size: 24px; /* Taille de la police */
    font-family: 'Daniel', sans-serif; /* Police Daniel */
}
        
.black-laurel-text {
    color: black; /* Couleur noire */
    font-size: 24px; /* Taille de la police */
    font-family: 'Laurel Comics', 'Comic Sans MS', sans-serif; /* Police Laurel Comics avec secours Comic Sans MS */
}
   .Books {
      overflow: hidden;
   }

   .book-container {
      display: flex;
      overflow-x: scroll;
      scroll-snap-type: x mandatory;
      white-space: nowrap;
   }

   .book-box {
      flex:0 0  300px ;
      scroll-snap-align: start;
      margin-right: 50px; /* Espace entre les livres */
   }

   .arrow-right {
      cursor: pointer;
   }
</style>




      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>nous books</title>
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
   <body class="main-layout Books-bg">
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
                                 <li class="active"><a href="books.html">Our Books</a></li>
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
      <div class="about-bg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="abouttitle">
                     <h2>Our Books</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
     
     
     
     
     
      <!--Books -->
      <div class="Books">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <span>نحن لمعرفة جديدة</span>
                             
                  </div>
               </div>
            </div>
            <a class="btn btn-secondary" href="books.php?tr=y" role="button">Tri Nom</a>
            <a  class="btn btn-secondary" href="javascript:window.print()">Imprimer</a>

            <p>.</p>

            <form method="get"> 
					<input type="text" name="search" id="search" class="form-control" placeholder="Chercher un livre">
				</form>

            <table class="table align-items-center justify-content-center mb-0">
                <thead>
			<tr>
           <!--<h1><th>Couverture</th></h1>
				<th>Nom</th>	
				<th>Auteur</th>
            <th>Prix</th>
            <th>Promotion</th>
            <th>Prix avec remise</th>
				<!--<th>Stock</th>-->
				<!--<th>Description</th>
            <th>Voir Détails</th>-->
			</tr>
			</thead>
      <?php
		
				foreach($listeLivres as $livre){
			?>
                  <tr>
            <h1><td><img style="max-width: 50%;max-height=50%" src="../soft-ui-dashboard-main/Livres/image/<?php echo $livre['couverture']; ?>"></td></h1>
            <td class="black-laurel-text"><?php echo $livre['nom']; ?></td>
            <!--<td><?php echo $livre['nom']; ?></td>-->
				<td class="banana-yellow-text"><?php echo $livre['auteur']; ?></td>
            <td><del><?php echo $livre['prix']; ?></del></td>
            <td><?php
          $promotion = $LivreC->Recupererpromotion($livre['idP']);
          $taux = $promotion['tauxRemise'];
          echo "$taux";
        ?>%</td>
        <td>
          <?php
          $promotion = $LivreC->Recupererpromotion($livre['idP']);
          $taux = $promotion['tauxRemise'];
          $prixWithDiscount = $livre['prix'] * (1 - $taux / 100);
          $hasDiscount = $taux > 0;
          echo "<td" . ($hasDiscount ? "class='discounted-price'" :"") . ">$prixWithDiscount tnd</td>";
          ?>
        </td>
        
				<!--<td><?php echo $livre['stock']; ?></td>--->
				<!--<td><?php echo $livre['description']; ?></td>--->
            <td>
					<form method="GET" action="library.php">
						<input type="submit"  class="btn btn-success btn-sm" name="voirdetails" value="Détails">
						<input type="hidden"  value=<?php echo $livre['idL']; ?>  name="idL">  
					</form>
				</td>
			</tr>
			<?php
				}
			?>
                </table>
         </div>
      </div>
      <!-- end Books -->
      <!-- footer -->
      <!--
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
