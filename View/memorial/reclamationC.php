

<?php
session_start();
//echo $_SESSION['email'];
//echo $_SESSION['idClient']; 
//echo $_SESSION['address'];

?>

<?php
include '../../Controller/chaimaC/Gestion_Reclamation.php' ;

// fonction bich ta5ou il id wa tod5ol il tableau clients wa itraj3alik il information imta3ou 


$reclamation_gestion = new reclamation_gestion();

$client =  $reclamation_gestion->showClient($_SESSION['idClient'])  ; 


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


    .hov:hover
      {
         border-radius: 20px;
         padding: 20px;
         
      }
      .voirmess
      {
         width: 25px;
         height: 25px;
         margin-bottom:25px;
      }
 
      .h3
      {
         display: inline-block;
         font-size: 20px;
      }
      .h3:hover
      {
         
         font-size: 20px;
         color: #b32137 ;
         padding: 5px;
         margin-right:10px;

      }
      
      .clr {
            background-image: url(chaimaV1/book3.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
         }


         /****animation lil 3onwen */

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
     
        .inpnobor
        {
         border: none;
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
                               
                             
                                <li><a href="index.php">Revenir a l'arriere</a></li>
                                <li class="mean-last"> <a href="changerprofil.php"><img src="images/top-icon.png" alt="#" /></a> </li>
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
                 <h2 class="animation" >Welcome <?= $client['firstName'];  ?> <?= $client['lastName'];  ?> </h2>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <section class ="clr">

        <div class="reclamation-box">        
            <div class="reclamation-left">
           


                <!---           FORMMMMMMMMMMMMMM        -->

                <form id="form" action="../../Controller/chaimaC/Traitement_Reclamation_Action.php" method="post" >
                <a href="repense_reclamation_tableau.php" class="hov" ><h3 class="h3">voir message</h3> <img  src="chaimaV1/mess.png" class="voirmess"></a> 

                <h3>Sent your request </h3>

                  <div class="input-row">
                         <!--bich nib3af il id -->
                         <input type="hidden" name="idUser"  value="<?= $client['idClient']; ?>">

                           <div >
                              <label >First Name</label>
                              <input type="text" class="inpnobor"   value="<?php echo $client['firstName']; ?>" readonly>
                           </div>
                    </div>
            <!----->
                    <div class="input-row">
                           <div >
                              <label >Last Name</label>
                              <input type="text" class="inpnobor"  value="<?php echo $client['lastName']; ?>"  readonly>
                           </div>
                    </div>
                <!----->  
                    <div class="input-row">
                       <div  >
                           <label >Email</label>
                           <input type="text"  class="inpnobor" value="<?php echo $client['email']; ?>"  readonly>
                       </div>
                      
                    </div>
                  <!----->
                    <div class="input-row">
                        <div id="div3" >
                              <label for="suijet">Subject</label>
                              <input id="suijet" name="suijet" type="text" placeholder="subject">
                        </div>
                    </div>
            <!----->
                   
                        <div id="div4" >
                                 <label for="textarea">Message</label>
                                 <textarea id="textarea" name="textarea" rows="5" placeholder="write your message"></textarea> 
                        </div>                      
                       <button type="submit" id="submit">Send</button>
                     


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
     <script src="reclamation_controle_saisie.js"></script>

   
</body>
</html>