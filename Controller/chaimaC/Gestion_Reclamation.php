<?php
include 'config.php';
include '../../Model/chaimaM/Reclamation.php' ;


/*********************  FAMA CLASS GESTION REPONSE WA CLASS GESTION RECLAMATION */

class reclamation_gestion
{
   
/**********************************************************************************************************/
    /*****************************bidayet il 5idma mil louwil ijdid*******/
    function showClient($id)
    {
        $sql = "SELECT * from client where idClient = $id";
        $config = new Config();
        $db = $config->getConexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $reclamation = $query->fetch();
            return $reclamation;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function addReclamation($reclamation)
    {  
     $sql = "INSERT INTO reclamation  VALUES (NULL,:idClient,:date_envoie,:sujet,:mess,DEFAULT)";

            $config = new Config();
            $db = $config->getConexion();   
         try {
           // print_r($reclamation->getDateEnvoie()->format('Y-m-d H:i:s'));
            $query = $db->prepare($sql);
            $query->execute([
                'idClient' => $reclamation->idUser(),
                'date_envoie' => $reclamation->getDateEnvoie()->format('Y-m-d H:i:s'),
                'sujet' => $reclamation->getSujet(),
                'mess' => $reclamation->getMess(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    public function listReclamation()
    {
        $sql = "SELECT * FROM reclamation";
        $config = new Config();
        $db = $config->getConexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteReclamation($id)
    {
        $sql = "DELETE FROM reclamation WHERE idReclamation = :id";

        $config = new Config();
        $db = $config->getConexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function showReclamation($id)
    {
        $sql = "SELECT * from reclamation where idReclamation = $id";
        $config = new Config();
        $db = $config->getConexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $reclamation = $query->fetch();
            return $reclamation;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    

    function updateReclamation($reclamation, $id)
    {
        try {
            $config = new Config();
            $db = $config->getConexion();
            
            $query = $db->prepare( 'UPDATE reclamation SET iduser = :iduser, date_envoie = :date_envoie, sujet = :sujet, message = :message ,etat=:etat WHERE idReclamation= :idReclamation' );
            $query->execute([
                'idReclamation' => $id,
                'iduser' => $reclamation->idUser(),
                'date_envoie' => $reclamation->getDateEnvoie()->format('Y-m-d H:i:s'),
                'sujet' => $reclamation->getSujet(),
                'message' => $reclamation->getMess(),
                'etat' => $reclamation->getEtat(),

            ]);
           // echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    // fonction a3maltha bich itwarik les repenses imta3 il rajik ki ijaweb il client
    function show_Notification($rec_ ,$iduser)
    {
        $sql = "SELECT * FROM reclamation WHERE etat = :etat AND iduser = :iduser";
        $config = new Config();
        $db = $config->getConexion();
        try {
            $query = $db->prepare($sql);
            $query->bindParam(':etat', $rec_);
            $query->bindParam(':iduser', $iduser);
            $query->execute();
    
            $notifications = $query->fetchAll(PDO::FETCH_ASSOC);
            return $notifications;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

 /********************ibdit ni5dim fil metier **************************/
 //fonction trie
 function show_etat_metier()
 {
     $sql = "SELECT * FROM reclamation ORDER BY 
             CASE 
                 WHEN etat = 'en attente' THEN 0
                 WHEN etat = 'traiter' THEN 1
                 WHEN etat = 'Archive' THEN 2
                 ELSE 3
             END, etat";
 
     $config = new Config();
     $db = $config->getConexion();
 
     try {
         $query = $db->prepare($sql);
         $query->execute();
 
         $notifications = $query->fetchAll(PDO::FETCH_ASSOC);
         return $notifications;
     } catch (Exception $e) {
         die('Error: ' . $e->getMessage());
     }
 }
}
 



/****************************** GESTION REPONSE ***************************** */

class reponse_gestion
{
   
    function addReponse($reponse)
    {  
     $sql = "INSERT INTO reponse  VALUES (NULL,:idReclamation,:Reponse,:date_envoie_r,DEFAULT)";

            $config = new Config();
            $db = $config->getConexion();   
         try {
            //print_r($reponse->getDateEnvoie_r()->format('Y-m-d H:i:s'));
            $query = $db->prepare($sql);
            $query->execute([
                'idReclamation' => $reponse->getidReclamation(),
                'Reponse' => $reponse->getReponse(),
                'date_envoie_r' => $reponse->getDateEnvoie_r()->format('Y-m-d H:i:s'),

            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function listeReponse_idR($idReclamation)
    {
        $sql = "SELECT * from reponse where idReclamation = :idReclamation";
        $config = new Config();
        $db = $config->getConexion();
        try {
            $query = $db->prepare($sql);
            $query->bindParam(':idReclamation', $idReclamation);
            $query->execute();
    
            $notifications = $query->fetchAll(PDO::FETCH_ASSOC);
            return $notifications;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function updateReponseEtat($idReclamation, $etat)
    {
        try {
            $config = new Config();
            $db = $config->getConexion();
            
            $query = $db->prepare('UPDATE reponse SET etat_rep = :etat_rep WHERE idReclamation = :idReclamation');
            $query->execute([
                'etat_rep' => $etat,
                'idReclamation' => $idReclamation,
            ]);
            
            // echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
// kan ifasa5ha il user il reponse il i9dom im3ach yo8hrou
    function voir_repon($idReclamation ,$etat_rep)
    {
        $sql = "SELECT * FROM reponse WHERE idReclamation = :idReclamation AND etat_rep = :etat_rep";
        $config = new Config();
        $db = $config->getConexion();
        try {
            $query = $db->prepare($sql);
            $query->bindParam(':idReclamation', $idReclamation);
            $query->bindParam(':etat_rep', $etat_rep);
            $query->execute();
    
            $notifications = $query->fetchAll(PDO::FETCH_ASSOC);
            return $notifications;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    

  

 
   



  
}


?>