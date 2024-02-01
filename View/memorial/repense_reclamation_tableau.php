<?php
session_start();
//echo $_SESSION['email'];
//echo $_SESSION['idClient']; 
//echo $_SESSION['address'];

?>
<!---------------------- liste repense --------------------------->
<?php
include '../../Controller/chaimaC/Gestion_Reclamation.php';


$reclamation_gestion = new reclamation_gestion();


$list = $reclamation_gestion->show_Notification('traiter',$_SESSION['idClient']);


/// he8iiii i7keyet il delete bich yitfasa5 lil user kima il notification

// inchoufou kan delete mawjoud wala le 
if (isset($_GET["delete"]) && isset($_GET["id"])) {
   $reclamtion_table =  $reclamation_gestion->showReclamation($_GET["id"]) ; 
   //var_dump($reclamtion_table);
   $date=date($reclamtion_table['date_envoie']); 
   $reclamtion = new reclamation( $reclamtion_table['idReclamation'], $reclamtion_table['iduser'], new DateTime($date), $reclamtion_table['sujet'], $reclamtion_table['message'] );
       
   $reclamtion =$reclamtion->setEtat('Archive'); 
  
   $reclamation_gestion->updateReclamation($reclamtion, $_GET["id"]);

/// update the reponse view
$reponse_gestion = new reponse_gestion();
$reponse_gestion->updateReponseEtat($_GET["id"], 'suppUse');

  


 
   
 
 }
?>


<!------------------------------------------------------------------------------------------->


<!DOCTYPE html>
<html lang="en">
<head>
    <!---------------------- --------------------------------------------------------------------->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="chaimaV1/style_repense_reclamation_tableau.css">
    <!---------------------- --------------------------------------------------------------------->

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


.messageN
{
   color: white;

}



.talwin
{
 cursor: pointer;
 color: black;
 font-weight: bold;

}
.talwin:hover
{
background-color: gray;
padding: 8px;
border-radius: 10px;
color: white;


}




/* animation lil 3inwaqn il kbir */
.animation
      {
    margin-top: 0;
      width: 100%;
      white-space: nowrap;
      overflow: hidden;
      animation:typing 10s  , cursor 5s step-end infinite alternate ;  
      font-family: 'Merriweather', serif;


      }
@keyframes typing {
            from {width : 0 ; }
            
        }


        .reclamation-bg
        {
         padding-top:3px ;
         margin-top: 115px;
        }

        table
        {
         background-image: url(chaimaV1/book3.jpeg);
         background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

    
      .retournimg
      {
         width:100px ;
         margin-left: 30px;

         
      }
      


</style>
</head>
<body>

    <header>
        <!-- header inner -->
            
        <!-- end header inner -->
     </header>
     <br><br><br>

                <!---             tableauuuu repensse       -->
                <section class="table__body">

<!---------------------------------------------nav bar---------------------------------------------->
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
                               <li class="mean-last"> <a href="#"><img src="images/search_icon.png" alt="#" /></a> </li>
                               <li class="mean-last"> <a href="#"><img src="images/top-icon.png" alt="#" /></a> </li>
                            </ul>
                          </nav>

                       </div>

                    </div>

                 </div>

              </div>

           </div> 
         

           <br><br>
           <a href="reclamationC.php" class="but"><img class="retournimg"src="chaimaV1/retourne_fleche_blanc.png" ></a>


        </div> 
<!---------------------------------------------nav bar---------------------------------------------->

        <br> <br>  

        <div class="reclamation-bg">
                     <div class="container">
                        <div class="row">
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <div class="reclamationtitle">
                                  <h2 class="animation"> Mail Box </h2>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

<!---------------------------------------------bar---------------------------------------------->

        <?php


// kan fama repense lil client rahi bich it8aharlik jadwal !
if (!empty($list)) {
?>
              <table>
                <tbody>       
                <?php
                $i=1 ; 
                 foreach ($list as $reclamation) {
                ?>
                    <tr class="notification_tafsi5">
                        <td class="messageN"> MESSAGE : <?= $i; ?> </td>
                     
                        <td class="messageN" > <u>Sujet :</u> <?= $reclamation['sujet']; ?> </td>
                        <td class="messageN" ><u> date d envoie : </u> <?= $reclamation['date_envoie']; ?></td>

                        <td>
                        <a class="talwin" href="voir_repense_reclamation.php?id=<?php echo $reclamation['idReclamation']; ?>" target="_self">view</a>
                        </td>
                        
                        
                        <td class="notification_tafsi5">
                            <a class="talwin" href="?delete=true&id=<?php echo $reclamation['idReclamation']; ?>" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</a>
                        </td>

                          
                       
                    </tr>
                <?php
                $i++ ; 
               }
                ?>
                </tbody>
            </table>
<!--- he8a il jadwal bich ifasah kima il historique ki tinzil 3ala delete -->
<td class="notification_tafsi5">
    <a class="talwin" href="?delete=true&id=<?php echo $reclamation['idReclamation']; ?>" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</a>
</td>

               <script>
                  function deleteRow(link) {
                     // Confirm deletion
                     if (confirm('Are you sure you want to delete this entry?')) {
                           // Find the parent <tr> element and remove it
                           var row = link.closest('tr');
                           row.remove();

                           // Decrement the value of i for the remaining rows
                           updateMessageNumbers();
                     }
                  }

                  function updateMessageNumbers() {
                     var rows = document.querySelectorAll('.notification_tafsi5');
                     rows.forEach(function (row, index) {
                           var messageNumber = index + 1;
                           row.querySelector('td:first-child').innerHTML = '<mark> MESSAGE Numero : ' + messageNumber + '</mark>';
                     });
                  }
               </script>

            


            <?php
} else {
   // kan le rahi bich it9olik erreur
    echo '<center><img src="chaimaV1/nomessage_found.png"></center> ';
}
?>

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
        </section>

     
  
      <!-- footer -->
      <footer>
       
       
     </footer>
     <script src="reclamation_controle_saisie.js" ></script>

   
</body>
</html>