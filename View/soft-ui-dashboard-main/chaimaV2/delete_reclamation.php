<?php
include '../../../../Controller/chaimaC/Gestion_Reclamation.php';


$reclamation_gestion = new reclamation_gestion();
$reclamation_gestion->deleteReclamation($_GET["id"]);
header('liste_reclamation.php');
?>
