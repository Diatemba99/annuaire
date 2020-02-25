<?php 
   // """""""""""""creation de la class genre avec son constructeur, son GETTER et SETTER"""""""""""" 
   class genre
   {
   	 private $nom;

   	function __construct($nom)
   	{
			$this->setNom($nom);
   	}
// """"""""""""""les SETTEURS""""""""""""""""
   	public function setNom($nom){$this->nom = $nom;}
// """"""""""""""les GETTEURS"""""""""""""
      public function getNom(){return $this->nom;}
   }

 ?>