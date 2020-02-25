<?php 
  if (isset($_POST['enregistrer'])) {
  	extract($_POST);
     if (notEmpty([$titre,$description,$datesortie,$realisateur,$src])) {
     	$film=new film($titre,$description,$datesortie,$realisateur,$src);
     	if ($db->addFilm($film)) {
    			message("insertion avec succes");
				header('Location: ?file=insertFilm');
				exit();
    		}
    		else{
    			message("erreur d'insertion");
    		}
     }
       else{
             message("veuiller remplir les champs");
         }
  }
 ?>