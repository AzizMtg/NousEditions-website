<?php
	include_once dirname(__FILE__).'/Config.php';
	include_once dirname(__FILE__).'/../../Model/Siwar/promotion.php';
	


	class promotionC {


/////..............................Afficher............................../////
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
		}

/////..............................Supprimer............................../////
		function Supprimerpromotion($idP){
			$sql="DELETE FROM promotion WHERE idP=:idP";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idP', $idP);   
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}


/////..............................Ajouter............................../////
		function Ajouterpromotion($promotion){
			$sql="INSERT INTO promotion (tauxRemise,dateDebut,dateFin) 
			VALUES (:tauxRemise,:dateDebut,:dateFin)";
			
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'tauxRemise' => $promotion->gettauxRemise(),
					'dateDebut' => $promotion->getdateDebut(),
					'dateFin' => $promotion->getdateFin(),
			]);
						
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
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
         } 
	?>
