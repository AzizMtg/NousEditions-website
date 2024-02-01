<?php
	include_once dirname(__FILE__).'/Config.php';
	include_once dirname(__FILE__).'/../../Model/Siwar/Livres.php';
	


	class LivreC {


/////..............................Afficher............................../////
		function AfficherLivres(){
			$sql="SELECT * FROM livres";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}

/////..............................Supprimer............................../////
		function SupprimerLivres($idL){
			$sql="DELETE FROM Livres WHERE idL=:idL";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idL', $idL);   
			try{
				$req->execute();
			}
			catch(Exception $e){
<<<<<<< Updated upstream
				die('Erreur:'. $e->getMeesage());
=======
				die('Erreur:'. $e->getMessage());
>>>>>>> Stashed changes
			}
		}


/////..............................Ajouter............................../////
		function AjouterLivres($Livres){
			$sql="INSERT INTO Livres (Nom,auteur,prix,couverture,stock,description,idP) 
			VALUES (:Nom,:auteur,:prix,:couverture,:stock,:description,:idP)";
			
			$db = config::getConnexion();
			try{
				$prixWithDiscount = $Livres->getprix() * (1 - $Livres->gettauxRemise() / 100);
				$query = $db->prepare($sql);
				$query->execute([
					'Nom' => $Livres->getNom(),
					'auteur' => $Livres->getauteur(),
					'prix' => $Livres->getprix(),
					'couverture' => $Livres->getcouverture(),
					'stock' => $Livres->getstock(),
					'description' => $Livres->getdescription(),
					'idP' => $Livres->gettauxRemise(),
			]);
						
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
/////..............................Affichage par la cle Primaire............................../////
		function RecupererLivres($idL){
			$sql="SELECT * from livres where idL=$idL";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Livres=$query->fetch();
				return $Livres;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

/////..............................Update............................../////
		function ModifierLivres($Livres,$idL){
			try {
				
				$db = config::getConnexion();
		$query = $db->prepare('UPDATE livres SET  nom = :nom, auteur = :auteur, prix = :prix, couverture = :couverture , stock = :stock, description = :description, idP = :idP  WHERE idL= :idL');
				$query->execute([
					'nom' => $Livres->getnom(),
					'auteur' => $Livres->getauteur(),
					'prix' => $Livres->getprix(),
					'couverture' => $Livres->getcouverture(),
					'stock' => $Livres->getstock(),
					'description' => $Livres->getdescription(),
					'idP' => $Livres->gettauxRemise(),
					'idL' => $idL
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
/////..............................tri............................../////
function TriNom(){
	$sql="SELECT * FROM livres order by nom ASC";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch(Exception $e){
		die('Erreur:'. $e->getMessage());
	}
}

/////..............................search............................../////
<<<<<<< Updated upstream

=======
function Recherche($nom){
	$sql="SELECT * from livres where nom like '".$nom."%' ";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch(Exception $e){
		die('Erreur:'. $e->getMessage());
	}
}
>>>>>>> Stashed changes

/////..............................Affichage par la cle Primaire............................../////
function Recupererpromotion($idP){
	$sql="SELECT * from promotion where idP=$idP";
	$db = config::getConnexion();
	try{
		$query=$db->prepare($sql);
		$query->execute();

		$promotions=$query->fetch();
		return $promotions;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

/////..............................Update............................../////
function Modifierpromotion($promotion,$idP){
	try {
		$db = config::getConnexion();
$query = $db->prepare('UPDATE promotion SET  tauxRemise = :tauxRemise, dateDebut = :dateDebut , dateFin = :dateFin WHERE idP= :idP');
		$query->execute([
			'tauxRemise' => $promotion->gettauxRemise(),
			'dateDebut' => $promotion->getdateDebut(),
			'dateFin' => $promotion->getdateFin(),
			'idP' => $idP
		]);
		echo $query->rowCount() . " records UPDATED successfully <br>";
	} catch (PDOException $e) {
		$e->getMessage();
	}
}
function Afficherpromotion(){
	$sql="SELECT * FROM promotion";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch(Exception $e){
		die('Erreur:'. $e->getMessage());
	}


 function displayBooks() {
	// Assuming $row is a result row from the JOIN query combining livre and promotion
	$originalPrice = $row['prix'] / 100;  // Convert cents to dollars (or your currency)
	$discountedPrice = $row['prixDiscount'] / 100;  // Convert cents to dollars
	$discountRate = number_format($row['tauxRemise'], 2) . '%';  // Format discount rate with percentage

	// Pass the calculated values to the view for display
	include('bookView.php');
}
        } 
		  function displayBofoks() {
			// Perform database query to fetch books and their promotions
			// You can use your database connection logic here
	
			$booksWithDiscount = []; // Replace this with your actual database query
	
			// Calculate discounted prices
			foreach ($booksWithDiscount as &$book) {
				$book['discountedPrice'] = $book['prix'] * (1 - $book['tauxRemise']);
			}
	
			// Pass data to the view
			include('bookView.php');
		}
	}
	
	?>
