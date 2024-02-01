<!---------------------- voir repense imta3 il client  --------------------------->
<?php
include '../../Controller/chaimaC/Gestion_Reclamation.php';


$reclamation_gestion = new reclamation_gestion();
$reponse_gestion = new reponse_gestion();



// Fetch reclamation by id
$reclamation = $reclamation_gestion->showReclamation($_GET["id"]);
$client =  $reclamation_gestion->showClient($reclamation["iduser"])  ; 

// fetch reponse by id reclamation
$reponse_idR = $reponse_gestion->voir_repon($reclamation["idReclamation"],'mawjoud');

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


body{      background-image: url(chaimaV1/book3.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-color: white;
         }
/************** */

.text2
{
   color: blue;
   font-weight: bold;
   font-size: 20px;
}
  
 

/* animation lil 3inwaqn il kbir */
      .animation
      {

      width: 100%;
      white-space: nowrap;
      overflow: hidden;
      animation:typing 10s  , cursor 5s step-end infinite alternate ;  

      }
@keyframes typing {
            from {width : 0 ; }
            
        }



      .but
      {
         margin-left: 900px;
      }
    
      
      .retournimg
      {
         width:100px
         
      }
      .reponsecontainer
      {
         background-color: #F0F0F0	;
         padding-left: 10px;
      }
      #form
      {
         background-color: white;
         opacity: 0.8;
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
                    <h2 class="animation" > answers</h2>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <section >

    
     
     <div class="reclamation-box">
    <div class="reclamation-left">
        <!---                      -->

        <form id="form">
            <h3 class="text"><u>Votre reclamtion a ete envoyee le <?php echo $reclamation['date_envoie']; ?>  : </u> </h3>
            <label for="textarea">M<?php echo $reclamation['message']; ?></label>

            <div id="divgrid">

               <a href="#" class="but" onmouseover="toggleImage('chaimaV1/voir_reponse2.png')" onmouseout="toggleImage('chaimaV1/voir_reponse1.png')" onclick="toggleResponses()">
                     <img id="responseImage" width="25" src="chaimaV1/voir_reponse1.png">
              </a>
         </div>

            <div id="responsesContainer" style="display: none;" class="reponsecontainer">
                <?php
                $i = 1;
                foreach ($reponse_idR as $reponse) {
                    ?>
                    <div>
                        <hr>
                        <label class="text2">Repense  <?= $i; ?> le  <?= $reponse['date_envoie_r']; ?>  : </label>
                        <label> <?php echo $reponse['Reponse']; ?> </label>
                        <hr>
                    </div>
                    <?php
                    $i++;
                }
                ?>
            </div>
        </form>
    </div>
</div>
<script>
    function toggleResponses() {
        var responsesContainer = document.getElementById('responsesContainer');
        if (responsesContainer.style.display === 'none') {
            responsesContainer.style.display = 'block';
        } else {
            responsesContainer.style.display = 'none';
        }
    }


    
function toggleImage(newSrc) {
    var image = document.getElementById('responseImage');
    image.src = newSrc;
}
</script>
                      
                   <br><br>
                    <a href="repense_reclamation_tableau.php"><img class="retournimg"src="chaimaV1/retourne_fleche_blanc.png" ></a>


                   
              
 
       
    </section>
    <br><br>
  
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