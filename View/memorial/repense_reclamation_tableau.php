
<!---------------------- liste repense --------------------------->
<?php
include '../../Controller/chaimaC/Gestion_Reclamation.php';


$reclamation_gestion = new reclamation_gestion();


// inchoufou kan delete mawjoud wala le 
if (isset($_GET["delete"]) && isset($_GET["id"])) {
  $reclamtion_table =  $reclamation_gestion->showReclamation($_GET["id"]) ; 
  //var_dump($reclamtion_table);
  $reclamtion = new reclamation( $reclamtion_table['id'],$reclamtion_table['nom'], $reclamtion_table['prenom'], $reclamtion_table['email'], $reclamtion_table['sujet'] , $reclamtion_table['message'] );
      
  $reclamtion =$reclamtion->setEtat('traiter.'); 
  $reclamtion =$reclamtion->setReponse($reclamtion_table['reponse']);  
 
  $reclamation_gestion->updateReclamation($reclamtion, $_GET["id"]);



}
$list = $reclamation_gestion->show_Notification('traiter');
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
  .table__body .header
{
    height: 150px;

}

mark 
{
   background-color: gray;
   color: white;
   border-radius: 5px;
   padding: 5px;
}

.talwin
{
 cursor: pointer;

}
.talwin:hover
{
background-color: gray;
padding: 5px;
border-radius: 5px;
color: white;


}


.but
{
   color:white ;
   background-color:black ;
   border-radius: 5px;
   padding: 5px;
   margin: 100px;

}
.but:hover
{
   background-color:gray ;
   color: black;

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
           <a href="chaimaV1/reclamationC.php" class="but">Retourne</a>


        </div> 
<!---------------------------------------------nav bar---------------------------------------------->

        <br> <br> <br> <br>


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
                        <td><mark> MESSAGE Numero : <?= $i; ?> </td>
                     
                        <td> <u>Sujet :<u> </td>
                        <td><?= $reclamation['sujet']; ?></td>

                        <td>
                        <a class="talwin" href="voir_repense_reclamation.php?id=<?php echo $reclamation['id']; ?>" target="_self">view</a>
                        </td>
                        
                        
                        <td >
                         <a class="talwin"  href="?delete=true&id=<?php echo $reclamation['id']; ?>" >Delete</a>
                         <a class="talwin" onclick="deleteRow(this); return false;" ></a>
                        </td>

                          
                       
                    </tr>
                <?php
                $i++ ; 
               }
                ?>
                </tbody>
            </table>
<!--- he8a il jadwal bich ifasah kima il historique ki tinzil 3ala delete -->
            <script>
                           function deleteRow(link) {
                           // Confirm deletion
                           if (confirm('mit2akid bich itfasa5 il repense ?')) {
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