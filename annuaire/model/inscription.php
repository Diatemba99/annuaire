<?php 
   /**
    *  
    */
   class Inscription
   {
   	 private $nom;
   	 private $email;
   	 private $telephone;
   	 private $mdp;

   	 function __construct($nom,$email,$telephone,$mdp){
        $this->setNom($nom);
        $this->setEmail($email);
        $this->setTelephone($telephone);
        $this->setmdp($mdp);
   	 }

   	 // les setters
   	 public function setNom($nom){$this->nom=$nom;}
   	 public function setEmail($email){$this->email=$email;}
   	 public function setTelephone($telephone){$this->telephone=$telephone;}
   	 public function setmdp($mdp){$this->mdp=$mdp;}

    // les getters 
   	 public function getNom(){return $this->nom;}
   	 public function getEmail(){return $this->email;}
   	 public function getTelephone(){return $this->telephone;}
   	 public function getmdp(){return $this->mdp;}
   }
 ?>