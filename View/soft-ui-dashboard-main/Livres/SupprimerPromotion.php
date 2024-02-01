<?php
<<<<<<< Updated upstream
=======
	//include '../../../Controller/promotionC.php';
>>>>>>> Stashed changes
	include '../../../Controller/Siwar/promotionC.php';

	$message = "" ; 
	$promotionC=new promotionC();
	$promotionC->Supprimerpromotion($_GET["idP"]);
	header('Location:AfficherPromotion.php?message= promotion Supprimé avec succés');
?>