<?php
	class Livre{
		private $idL=null;
		private $nom=null;
		private $auteur=null;
		private $prix=null;
		private $couverture=null;
		private $stock=null;
		private $description=null;
		private $tauxRemise=null;

		

		//// Contructor
		function __construct($nom,$auteur,$prix,$couverture,$stock,$description,$tauxRemise){
			$this->nom=$nom;
			$this->auteur=$auteur;
			$this->prix=$prix;
			$this->couverture=$couverture;
			$this->stock=$stock;
			$this->description=$description;
			$this->tauxRemise=$tauxRemise;
		}

        /// Getters
		function getidC(){
			return $this->idC;
		}
		function getnom(){
			return $this->nom;
		}
		function getauteur(){
			return $this->auteur;
		}
		function getprix(){
			return $this->prix;
		}
		function getcouverture(){
			return $this->couverture;
		}
		function getstock(){
			return $this->stock;
		}
		function getdescription(){
			return $this->description;
		}
		function gettauxRemise(){
			return $this->tauxRemise;
		}

       //// Setters
		function setnom(string $nom){
			$this->nom=$nom;
		}
		function setauteur(string $auteur){
			$this->auteur=$auteur;
		}
		function setprix(int $prix){
			$this->prix=$prix;
		}
		function setcouverture(string $couverture){
			$this->couverture=$couverture;
		}
		function setstock(number $stock){
			$this->stock=$stock;
		}
		function setdescription(string $description){
			$this->description=$description;
		}
		function settauxRemise(decimal $tauxRemise){
			$this->tauxRemise=$tauxRemise;
		}


	}
?>