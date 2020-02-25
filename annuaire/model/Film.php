<?php 
   // """""""""""""creation de la class film avec son constructeur, ses GETTER et SETTER"""""""""""" 
   class Film
   {
   	 private $titre;
   	 private $description;
   	 private $datesortie;
   	 private $realisateur;
       private $src;

   	function __construct($titre,$description,$datesortie,$realisateur,$src)
   	{
   		
			$this->setTitre($titre);
			$this->setDescription($description);
			$this->setDatesortie($datesorie);
			$this->setRealisateur($realisateur);
         $this->setSrc($src);
			
   	}
// """"""""""""""les SETTEURS""""""""""""""""
   	public function setTitre($titre){$this->titre = $titre;}
   	public function setDescription($description){$this->description = $description;}
   	public function setDatesortie($datesortie){$this->datesortie = $datesortie;}
      public function setRealisateur($realisateur){$this->realisateur = $realisateur;}
   	public function setSrc($src){$this->src = $src;}

 // """"""""""""""les GETTEURS"""""""""""""
   public function getTitre(){return $this->titre;}
   public function getDescription(){return $this->description;}
   public function getDatesortie(){return $this->datesortie;}
   public function getRealisateur(){return $this->realisateur;}
   public function getSrc(){return $this->src;}
   }

 ?>