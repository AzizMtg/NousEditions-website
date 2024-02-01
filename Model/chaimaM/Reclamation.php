<?php
/*********************  FAMA CLASS REPONSE WA CLASS RECLAMATION */
class reclamation
{
    private ?int $idReclamation = null;
    private ?string $iduser = null;
    private ?DateTime $date_envoie = null;
    private ?string $sujet = null;
    private ?string $mess = null;
    private ?string $etat ;



    public function __construct($id , $user, $date, $s ,$m )
    {
        $this->idReclamation = $id;
        $this->iduser = $user;
        $this->date_envoie = $date;
        $this->sujet = $s;
        $this->mess = $m;
    

    }


    public function getIdReclamation()
    {
        return $this->idReclamation;
    }

    public function idUser()
    {
        return $this->iduser;
    }

    public function getDateEnvoie()
    {
        return $this->date_envoie;
    }

    public function getSujet()
    {
        return $this->sujet;
    }

    public function getMess()
    {
        return $this->mess;
    }
    public function getEtat()
    {
        return $this->etat;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;

    }

   
}
/***********************CLASS REPONSE  ********************************************/
class reponse
{
    private ?int $idReponse = null;
    private ?string $idReclamation = null;
    private ?string $Reponse = null;
    private ?DateTime $date_envoie_r = null;

    private ?string $etat_rep ;
   



    public function __construct($id, $idReclamation, $Reponse, $date )
    {
        $this->idReponse = $id;
        $this->idReclamation = $idReclamation;
        $this->Reponse = $Reponse;
        $this->date_envoie_r = $date;

       
    

    }


    public function getidReponse()
    {
        return $this->idReponse;
    }

    public function getidReclamation()
    {
        return $this->idReclamation;
    }

    public function getReponse()
    {
        return $this->Reponse;
    }


    public function getDateEnvoie_r()
    {
        return $this->date_envoie_r;
    }

  
    public function getEtat_rep()
    {
        return $this->etat_rep;
    }
   

    public function setEtat_rep($etat_rep) {
        $this->etat_rep = $etat_rep;
        return $this;

    }

   

}
?>
