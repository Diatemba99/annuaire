<?php 
 //"""""""""""""""""""""Connexion a la base de donnees par POO """"""""""""""""""""" 
   class Databases{
   	private $db;
		
		public function __construct($db_host = DB_HOST, $db_name = DB_NAME, $user_name = USER_NAME, $pwd = PW)
		{
			try {
				$this->db = new PDO("mysql:host=".$db_host.";dbname=".$db_name, $user_name, $pwd);
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				die('Erreur'.$e->getMessage());
			}
		}

		public function getDB(){
			return $this->db;
		}
        
        // Pour ajouter un utilisateur 
        public function addUser(inscription $user){
        	try {
        	  $q=$this->getDB()->prepare("INSERT INTO inscription VALUES(null,:nom, :email, :telephone, :mdp)");
        	  return $q->execute([
                'nom' => $user->getNom(),
                'email' => $user->getEmail(),
                'telephone' => $user->getTelephone(),
                'mdp' => $user->getmdp(),
        	  ]);
        	} catch (PDOException $e) {
              message("La valeur du champs login est déjà existante");

        	}
        	
        }

        //cette methode permet de tester l'existance de email et le mdp dans la base
      public function exister($email, $mdp){ 
        try{
        $q = $this->getDB()->prepare('SELECT * from inscription WHERE email = :email AND mdp = :mdp');
        $q->execute([
          'email' => $email,
          'mdp' => $mdp
         ]);

           $resultat=$q->fetch(PDO::FETCH_OBJ);
          }catch(PDOException $e){
          die($e->getMessage());
       }
      return $resultat;
    }

      // tous les types de films avec leur genre
    public function getAllfilm(){
      try{
      $sql=$this->getDB()->prepare('SELECT * from film;');
      $sql->execute([]);

      $allfilm=$sql->fetchAll(PDO::FETCH_OBJ);
     }catch(PDOException $e){
      die($e->getMessage());
      }
      return $allfilm;
    }
    public function recuperationId($id){
     try{
      $sql=$this->getDB()->prepare('SELECT * FROM film where id=:id;');
      $sql->execute(['id'=>$id]);

      $data=$sql->fetchAll(PDO::FETCH_OBJ);
     }catch(PDOException $e){
      die($e->getMessage());
      }
      return $data;
  }
 // Pour ajouter un film
        public function addFilm(Film $film){
          try {
            $q=$this->getDB()->prepare("INSERT INTO film VALUES(null,:titre, :description, :datesortie, :realisateur, :src)");
            return $q->execute([
                'titre' => $film->getTitre(),
                'description' => $film->getDescription(),
                'datesortie' => $film->getDatesortie(),
                'realisateur' => $film->getRealisateur(),
                'src' => $film->getSrc(),
            ]);
          } catch (PDOException $e) {
              message("La valeur du champs login est déjà existante");

          }
          
        }

       // supprimer un film
        public function deletefilmId($id){
        try{
          $sql=$this->getDB()->prepare('DELETE FROM film where id=:id;');
          $sql->execute(['id'=>$id]);
        }catch(PDOException $e){
          die($e->getMessage());
          }
          return $sql;
  }
      // afficher uniquement les actions
     public function allActions(){
     try{
      $sql=$this->getDB()->prepare('SELECT * FROM film,genre where film.id=genre.idg and genre.nom="action" || genre.nom="romantique" ;');
      $sql->execute([]);

      $data=$sql->fetchAll(PDO::FETCH_OBJ);
     }catch(PDOException $e){
      die($e->getMessage());
      }
      return $data;
  }

// tous les mangas 
  public function allMangas(){
     try{
      $sql=$this->getDB()->prepare('SELECT * FROM film,genre where film.id=genre.idg and genre.nom="manga";');
      $sql->execute([]);

      $data=$sql->fetchAll(PDO::FETCH_OBJ);
     }catch(PDOException $e){
      die($e->getMessage());
      }
      return $data;
  }

// tous les film de type vengeances 
  public function allVengeances(){
     try{
      $sql=$this->getDB()->prepare('SELECT * FROM film,genre where film.id=genre.idg and genre.nom="vengeance" ;');
      $sql->execute([]);

      $data=$sql->fetchAll(PDO::FETCH_OBJ);
     }catch(PDOException $e){
      die($e->getMessage());
      }
      return $data;
  }
}