<?php 

  if (isset($_POST['connecter'])) {
  	 extract($_POST);
  	if (notEmpty([$email,$mdp])) {
  		 $existe = $db->exister($email,$mdp);
  		 if ($existe) {
  		 	 if ($email=="fallmidadi1996@gmail.com"||$email=="diouf92@gmail.com"||$email=="m@m.gmail.com"||$email=="amsadara@gmail.com") {
  		 		$_SESSION['validate_user'] = $existe;
				
					header("location:?file=goadmin");
  		 	}
  		 	else{
  		 		$_SESSION['validate_user'] = $existe;
  		 		header("Location: ?file=goadminSimple");
  		 	}
  		 }
  		 else{
  		 	message("email ou mot de passe incorrect <br>");
  		 }
  	}
  	else{
  		message("Veuillez remplir tous les champs <br>");
  	}
  }
  require('./connect.php');

  
 ?>