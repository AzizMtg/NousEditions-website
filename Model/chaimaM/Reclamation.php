<?php
class reclamation
{
    private ?int $id_reclamation = null;
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?string $email = null;
    private ?string $sujet = null;
    private ?string $mess = null;
    private ?string $etat ;
    private ?string $repense ;


    public function __construct($id = null, $n, $p, $e, $s ,$m )
    {
        $this->id_reclamation = $id;
        $this->nom = $n;
        $this->prenom = $p;
        $this->email = $e;
        $this->sujet = $s;
        $this->mess = $m;
    

    }
    

    public function getIdReclamation()
    {
        return $this->id_reclamation;
    }

    public function getNom()
    {
        return $this->nom;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getEmail()
    {
        return $this->email;
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

    public function getRepense()
    {
        return $this->repense;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;

    }
    public function setReponse($repnse) {
        $this->repense = $repnse;
        return $this;

    }



}
