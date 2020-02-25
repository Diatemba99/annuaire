<?php 

    if (isset($_POST['inscrire'])) {
    	extract($_POST);
    	if (notEmpty([$nom,$email,$telephone,$mdp])) {
    		$user= new inscription($nom,$email,$telephone,$mdp);
    		if ($db->addUser($user)) {
    			message("insertion avec succes");
				header('Location: ?file=tinspage');
				exit();
    		}
    		else{
    			echo "erreur";
    		}
         
    	}
    	
    }
    else{
             echo "veuiller remplir les champs";
         }
 ?>    	
