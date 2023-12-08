<?php
session_start();
if(!$_SESSION['email']){
    header('Location:connexion2.php');
}
$_SESSION=array();
session_destroy();
header('Location:connexion2.php');

?> 