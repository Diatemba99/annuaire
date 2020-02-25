<?php 
   // """""""""""""creation de la class genre avec son constructeur, son GETTER et SETTER"""""""""""" 
   class linkgf
   {
   	 private $id;
       private $idg;
   	function __construct($id,$idg)
   	{
			$this->setId($id);
         $this->setIdg($idg);
   	}
// """"""""""""""les SETTEURS""""""""""""""""
   	public function setId($id){$this->id = $id;}
      public function setIdg($idg){$this->idg = $idg;}
// """"""""""""""les GETTEURS"""""""""""""
      public function getId(){return $this->id;}
      public function getIdg(){return $this->idg;}
   }

 ?>