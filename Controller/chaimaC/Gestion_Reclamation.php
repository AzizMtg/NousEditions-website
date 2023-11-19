<?php
include 'config.php';
include '../../Model/chaimaM/Reclamation.php' ;


class reclamation_gestion
{
  function addReclamation($reclamation)
    {
        $sql = "INSERT INTO reclamation  VALUES (NULL,:nom,:prenom, :email,:sujet,:mess,DEFAULT,DEFAULT)";

        $config = new Config();
        $db = $config->getConexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $reclamation->getNom(),
                'prenom' => $reclamation->getPrenom(),
                'email' => $reclamation->getEmail(),
                'sujet' => $reclamation->getSujet(),
                'mess' => $reclamation->getMess(),
            ]);
        } 
        catch (Exception $e) {
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
        $sql = "DELETE FROM reclamation WHERE id = :id";

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
        $sql = "SELECT * from reclamation where id = $id";
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


  
}

?>