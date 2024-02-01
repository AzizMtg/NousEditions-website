<?php
include '../../Controller/Siwar/LivresC.php';


<<<<<<< Updated upstream
=======
session_start();
  // echo $_SESSION['email'];
   // echo $_SESSION['idClient']; 


>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
   </head>
   <!-- body -->
   <body class="main-layout">
=======
   
 
   <style>
    .taswira{

   
background-color:bisque;
}
</style>
   
   
   </head>



   <!-- body -->
   <body class="main-layout">


   
   
>>>>>>> Stashed changes
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
                                 <li > <a href="index.html">Home</a> </li>
                                 <li> <a href="about.html">About us</a> </li>
                                 <li><a href="books.html">Our Books</a></li>
                                 <li class="active"><a href="library.html">library</a></li>
                                 <li><a href="contact.html">Contact us</a></li>
                                 <li class="mean-last"> <a href="#"><img src="images/search_icon.png" alt="#" /></a> </li>
                                 <li class="mean-last"> <a href="#"><img src="images/top-icon.png" alt="#" /></a> </li>
=======
                                 
                                 <li><a href="books - Copie.php">Revenir en Arriere</a></li>
                             
                              
                                
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream

=======
  <div id="photoContainer"></div>
>>>>>>> Stashed changes

      
      <!-- Library -->

      <div class="Library">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">

               
<<<<<<< Updated upstream
                        <!-------------jebna les attributs les hachetna bch naffichiwhom---------------->
                        <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="" class="carousel slide" data-ride="carousel">
                        <div class="">
                        <img style="max-width: 100%;max-height=100%" src="../soft-ui-dashboard-main/Livres/image/<?php echo $livre['couverture']; ?>">
                        </div>
=======
   <center>                  <!-------------jebna les attributs les hachetna bch naffichiwhom---------------->
 <div class ="taswira">
<div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="" class="carousel slide" data-ride="carousel">
                        <div>
                            
                        <img style="height: 500px; width: 1000px " src="../soft-ui-dashboard-main/Livres/image/<?php echo $livre['couverture']; ?>">
                            
                    </div>
>>>>>>> Stashed changes
                    </div>

                </div>
            </div>

<<<<<<< Updated upstream
            <div class="col-lg-7 pb-5">
=======
</div>
</center>   
          


            <script>
        function generateRandomPhotos(numPhotos) {
            // Sample data for demonstration purposes
            const photoUrls = [

               " https://scontent.xx.fbcdn.net/v/t1.15752-9/393165133_701375371971233_1862960302119234761_n.png?stp=dst-png_p403x403&_nc_cat=107&ccb=1-7&_nc_sid=510075&_nc_ohc=BRl75mP_eVgAX9DpX6L&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdReQ-pYMJ_3yDdP_krZKGplg9jPhLcz8MEn2Y3padF84w&oe=65A13DFC",  
               "https://scontent.xx.fbcdn.net/v/t1.15752-9/386900695_290992580078051_4695215398588210402_n.png?stp=dst-png_p403x403&_nc_cat=110&ccb=1-7&_nc_sid=510075&_nc_ohc=ChxDrimEUw0AX-P8SsB&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdT_-IPoLbrUAd-5zwV6mj4SQWKI63cmXTDtecGC-TZmzw&oe=65A14031" ,                    ];

            const photoLinks = [
                "http://localhost:3000/View/memorial/library.php?voirdetails=D%C3%A9tails&idL=19",
                "https://www.facebook.com/NOUSedition?locale=fr_FR    "
                ,   ];

            // Select random photos and links
            const selectedPhotos = getRandomItems(photoUrls, numPhotos,);
            const selectedLinks = getRandomItems(photoLinks, numPhotos);

            // Construct HTML elements for each random photo
            const photoContainer = document.getElementById("photoContainer");
            photoContainer.innerHTML = ""; // Clear existing contentµ



            const scrollingContainer = document.createElement("div");
        scrollingContainer.id = "scrollingContainer";
        scrollingContainer.style.whiteSpace = "nowrap";
        scrollingContainer.style.overflowX = "hidden";
        scrollingContainer.style.width = "100%";



            for (let i = 0; i < selectedPhotos.length; i++) {
                const photoUrl = selectedPhotos[i];
                const linkUrl = selectedLinks[i];

                const imgElement = document.createElement("img");
                imgElement.src = photoUrl;
                imgElement.alt = "Random Photo";
                imgElement.style.width = "100%"; // Adjust image width as needed
                imgElement.style.height = "400px"; 

                const linkElement = document.createElement("a");
                linkElement.href = linkUrl;
                linkElement.target = "_blank"; // Open link in a new tab
                linkElement.appendChild(imgElement);

                photoContainer.appendChild(linkElement);
            
                scrollingContainer.appendChild(container);

            
            }

            photoContainer.appendChild(scrollingContainer);
            setInterval(() => {
            scrollingContainer.scrollLeft += scrollingContainer.offsetWidth;
        }, 3000);
        

        }

        // Helper function to get a random subset of items from an array
        function getRandomItems(array, numItems) {
            const shuffledArray = array.sort(() => Math.random() - 0.5);
            return shuffledArray.slice(0, numItems);
        }

        // Example usage
        const numPhotosToGenerate = 1; // Change this to the desired number of photos
        generateRandomPhotos(numPhotosToGenerate);
    </script>

<center>
            <div class="col-lg-7 pb-5 taswira">
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
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
=======
                <p class="mb-1"><h2>Description Livre : </h2> <?php echo $livre['description']; ?></p>

                    
                </div>
                
            </div>
        </div>
        </center>
    </div>

>>>>>>> Stashed changes
                    
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