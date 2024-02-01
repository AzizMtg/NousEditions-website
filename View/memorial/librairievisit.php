

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
   
   
   
   
   
   
   
   <!--------- FAZET IL BOOKS IL JDIDA 3D ------------------->
   <meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>3D Book Showcase</title>
		<meta name="description" content="3D Book Showcase with CSS 3D Transforms" />
		<meta name="keywords" content="3d transforms, css3 3d, book, jquery, open book, css transitions" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="fazit_il_3d/css/default.css" />
		<link rel="stylesheet" type="text/css" href="fazit_il_3d/css/component.css" />
		<script src="fazit_il_3d/js/modernizr.custom.js"></script>
   
   
      <style>
    /* Style for the shopping cart form */
    #cart {
        display: block;
        max-width: 300px; /* Adjust the width as needed */
        margin: 20px auto; /* Center the cart */
        padding: 20px;
        border: 1px solid #ccc; /* Border styling */
        border-radius: 8px; /* Rounded corners */
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    /* Style for the cart items list */
    #cart-items {
        list-style: none;
        padding: 0;
    }

    /* Style for the 'Proceed to Checkout' button */
    #cart button[type="submit"] {
        background-color: red;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        margin-top: 10px;
    }

    /* Style for the total price paragraph */
    #totalPrice {
        margin-top: 10px;
        font-size: 16px;
    }

    /* Optional: Style for the heading */
    #cart h2 {
        font-size: 20px;
        margin-bottom: 10px;
    }
</style>
   
      <style>
         .about-bg
         {
           
    background-image: linear-gradient(#b32137,#170f10);
    margin-top: 90px;
}
         



    </style>
   
   
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
                                 <li > <a href="connexion2.php">Se Connecter</a> </li>
                                
                                 <li class="mean-last"> <a href="#"><img src="images/search_icon.png" alt="#" /></a> </li>
                                 <li class="mean-last"> <a href="changerprofil.php"><img src="images/top-icon.png" alt="#" /></a> </li>
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
                             
                  </div>
               </div>
            </div>
            <a class="btn btn-secondary" href="books.php?tr=y" role="button">Tri Nom</a>
            <a  class="btn btn-secondary" href="javascript:window.print()">Imprimer</a>

            <p>.</p>

            <form method="get"> 
					<input type="text" name="search" id="search" class="form-control" placeholder="Chercher un livre">
				</form>



            <br><br>



<!---------------------------------------------------------------------------------------------------->
        
    
<div class="main">
   <!---------------------------------------------------------------------------------------------------->

           
<!----------------------------------------------------------------------------------->

<br><br>

				<ul id="bk-list" class="bk-list clearfix grid">
         <?php
		
				foreach($listeLivres as $livre){
			?>

      
					<li >
						<div class="bk-book book-1 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover-back"></div>
								<div class="bk-cover">
                        <img style="width: 100%; height: 100%; object-fit: cover;" src="../soft-ui-dashboard-main/Livres/image/<?php echo $livre['couverture']; ?>">
								</div>
                        
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
                           <h2>
										<center><span><?php echo $livre['auteur']; ?></span></center>
										<span id="nomliv"><?php echo $livre['nom']; ?></span>
									</h2>
								
								</div>
								<div class="bk-content">
                        <p><?php echo $livre['description']; ?></p>
								</div>
								
							</div>
							<div class="bk-back">
                            <img src="fazit_il_3d/images/nous.jpg" alt="cat"  style="width: 100%; height: 100%; object-fit: cover;"/>		
      					</div>
							<div class="bk-right"></div>
							<div class="bk-left">
                     <img style="width: 100%; height: 100%; object-fit: cover;" src="../soft-ui-dashboard-main/Livres/image/<?php echo $livre['couverture']; ?>">

							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="bk-bookback ">Flip</button>
							<button class="bk-bookview">View inside</button>

                   
							<h3>
								<span>
                        <del> <?php echo $livre['prix']; ?>  </del>
                           <?php
                              $promotion = $LivreC->Recupererpromotion($livre['idP']);
                              $taux = $promotion['tauxRemise'];
                              echo "$taux";
                            ?>%
                     
                     
                       </span>
								<span>
                               <?php
                                 $promotion = $LivreC->Recupererpromotion($livre['idP']);
                                 $taux = $promotion['tauxRemise'];
                                 $prixWithDiscount = $livre['prix'] * (1 - $taux / 100);
                                 $hasDiscount = $taux > 0;
                                 echo "<td" . ($hasDiscount ? "class='discounted-price'" :"") . ">$prixWithDiscount tnd</td>";
                               ?>

                               
                              <input type="number" id="quantity" value="1" min="1" >
                              <input type="hidden" value="<?php echo $livre['idL']; ?> " id="idl">
                              <input type="hidden" value="<?php echo $prixWithDiscount; ?> " id="prixliv">

                              <button id="cart-items" onclick="redirectToConnexion()" style="margin:10px; background-color:red; font-family:Verdana, Geneva, Tahoma, sans-serif">
    <img src="fazit_il_3d/images/1.webp" alt="cat" style="width:30px;height:30px;margin:5px;"/> Add To Cart
</button>

                         

                        </span>
							</h3>
						</div>
					</li>           
        
			<?php
				}
			?>
            
         </ul>
      </div>


<!--------------------------------------------------------------------------------------------------------------->
                

<script>
    function redirectToConnexion() {
        window.location.href = 'connexion2.php';
    }
</script>     
    
      
  <!-- Your HTML/PHP code -->

<!-- Cart display area -->







      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>


<!---------------------- fazet il 3d ---------------------------------->

<script src="fazit_il_3d/js/jQuery -1.8.3.js"></script>
		<script src="fazit_il_3d/js/books1.js"></script>
		<script>
			$(function() {

				Books.init();

			});
		</script>


   </body>
   <style type="text/css">body { cursor: url('data:image/x-icon;base64,AAACAAEAICAAAAAAAACoEAAAFgAAACgAAAAgAAAAQAAAAAEAIAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8KCgr/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEBAQ/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPjw9/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZv//AGb//wBm//8AZv//AGb//wBm//8AZv//FEeU/wAAAP8AAAD/AAAA/wBm//8AZv//AGb//xQUFP8AAAD/AAAA/wAAAP8AZv//AGb//wBm//8AZv//AGb//wBm//8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABm//8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AZv//AAAA/wAAAP8AAAD/AGb//xJFkf8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGb//wAAAP8AAAD/////////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZv//AAAA//////////////////////////////////////////////////////8AAAD/AAAA////////////////////////////////////////////AAAA//////8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABm//8AAAD//////wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD//////wAAAP//////AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP///////////wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGb//wAAAP//////AAAA////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZv//AAAA//////8AAAD///////////////////////////////////////////8AAAD///////////////////////////////////////////////////////////8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABm//8AAAD//////wAAAP///////////////////////////////////////////wAAAP///////////////////////////////////////////////////////////wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGb//wAAAP//////AAAA////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZv//AAAA//////8AAAD///////////////////////////////////////////8AAAD///////////////////////////////////////////////////////////8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABm//8AAAD//////wAAAP///////////////////////////////////////////wAAAP///////////////////////////////////////////////////////////wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGb//wAAAP//////AAAA////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAAAAAAD/AAAAAAAAAAAAZv//AAAA//////8AAAD///////////////////////////////////////////8AAAD///////////////////////////////////////////////////////////8AZv//AAAA/wAAAAAAAAAAAAAAAAAAAP8AAAAAAAAAAABm//8AAAD//////wAAAP///////////////////////////////////////////wAAAP///////////////////////////////////////////////////////////wBm//8AAAD/AAAAAAAAAAAAAAD/AAAA/wAAAAAAAAAAAGb//wAAAP//////AAAA////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////AGb//wAAAP8AAAAAAAAAAAAAAP8AAAD/AAAA/wAAAAAAZv//AGb///////8AAAD///////////////////////////////////////////8AAAD//////////////////////////////////////////////////////wAAAP8AZv//AAAA/wAAAAAAAAAAAAAA/wAAAP8AAAD/AAAAAAAAAAAAAAAAAAAA/wAAAP///////////////////////////////////////////wAAAP//////////////////////////////////////////////////////AAAA/xOSE38AAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAA//////////////////////////////////////8AAAD/AAAAAAAAAP///////////////////////////////////////////wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANDQ3/AAAA/wAAAP8AAAD/AGb//wBm//8AZv//AGb//wAAAP8AAAD/AAAA/w2NDX8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AAAD/AAAA/wBm//8AZv//AGb//wBm//8AZv//AGb//wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/wAAAP8AAAD/AGb//wBm//8AZv//AGb//wBm//8AAAD/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/AAAA/wBm//8AZv//AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8AZv//AGb//wAAAP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/yQkJP8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA///////////////////////////8f9/8/AAAAPwAAAD8AAAA/AAAAPwAAAD8AAAA/AAAAPwAAAD8AAAA/AAAAPwAAAD8AAAA7AAAAOwAAADMAAAAxAAAAMcAAAPHgCAHw+B4H4AP//+AD///gD///4H///+H////n/////////8='), auto; }</style>
</html>
