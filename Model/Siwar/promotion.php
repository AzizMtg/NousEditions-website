<?php
	class promotion{
		private $idP=null;
		private $tauxRemise=null;
		private $dateDebut=null;
		private $dateFin=null;


		

		//// Contructor
		function __construct($tauxRemise,$dateDebut,$dateFin){
			$this->tauxRemise=$tauxRemise;
			$this->dateDebut=$dateDebut;
			$this->dateFin=$dateFin;

		}

        /// Getters
		function getidP(){
			return $this->idP;
		}
		function gettauxRemise(){
			return $this->tauxRemise;
		}
		function getdateDebut(){
			return $this->dateDebut;
		}
		function getdateFin(){
			return $this->dateFin;
		}
		


       //// Setters
		function settauxRemise(decimal $tauxRemise){
			$this->tauxRemise=$tauxRemise;
		}
		function setdateDebut(date $dateDebut){
			$this->dateDebut=$dateDebut;
		}
		function setdateFin(date $dateFin){
			$this->dateFin=$dateFin;
		}
		
	}
?>