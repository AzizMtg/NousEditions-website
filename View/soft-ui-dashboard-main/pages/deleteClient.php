<?php
include '../../../Controller/KhalilTriki/ClientC.php';
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
$clientC = new ClientC();
$clientC->deleteClient($_GET["idClient"]);
header('Location:ListClients.php');
