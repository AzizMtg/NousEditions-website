<?php
<<<<<<< Updated upstream
=======
	//include '../../../Controller/LivresC.php';
>>>>>>> Stashed changes
	include '../../../Controller/Siwar/LivresC.php';

	$message = "" ; 
	$LivreC=new LivreC();
	$LivreC->SupprimerLivres($_GET["idL"]);
	header('Location:AfficherLivres.php?message= Livre Supprimé avec succés');
?>