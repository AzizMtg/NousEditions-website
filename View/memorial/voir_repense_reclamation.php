<!---------------------- voir repense imta3 il client  --------------------------->
<?php
include '../../Controller/chaimaC/Gestion_Reclamation.php';


$reclamation_gestion = new reclamation_gestion();


// inchoufou kan delete mawjoud wala le 
if (isset($_GET["delete"]) && isset($_GET["id"])) {
  $reclamation_gestion->deleteReclamation($_GET["id"]);
}

// Fetch reclamation by id
$reclamation = $reclamation_gestion->showReclamation($_GET["id"]);

?>




<!DOCTYPE html>
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
    <link rel="stylesheet" href="chaimaV1/reclamationCstyle.css"> <!--he8i a3maltha ana lil reclamation-->


    <style>
      .but
      {
         color:white ;
         background-color:black ;
         border-radius: 5px;
         padding: 5px;
         margin: 300px;

      }
      .but:hover
      {
         background-color:gray ;
         color: black;

      }
      #r
      {
        font-size: 15px;
        font-weight: bold;

        

      }
   </style>
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
            <h3 id="titre"> Repense A la Reclamation pour le client  : <?= $reclamation['nom'];  ?> <?= $reclamation['prenom'];  ?> </h3>
                <!---              FORMMMMMMMMMMMMMM        -->
             
                <form id="form"  >
                
                       <div id="divgrid"  >
                          <label for="suijet" id="r">Subject du Reclamation :</label>
                          <?php echo $reclamation['sujet']; ?>
                      </div>
 
                   
                       <div id="divgrid" >
                           <label for="textarea" id="r">Message du Reclamation :</label>
                           <?php echo $reclamation['message']; ?>
                       </div>

                       <div id="divgrid" >
                           <label for="textarea" id="r">Repense du Reclamation :</label>
                           <?php echo $reclamation['reponse']; ?>
                       </div>
                       
                      <a href="repense_reclamation_tableau.php" class="but">Retourne</a>
                   
                </form>
 
           
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
     <script src="reclamation_controle_saisie.js" ></script>

   
</body>
</html>