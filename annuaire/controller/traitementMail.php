<?php 
   if(isset($_POST['contacter'])){
   	 extract($_POST);
   	if (notEmpty([$nom,$email,$telephone,$probleme])){
   	 mail("fallmidadi1996@gmail.com","a propos d'aide ",$nom.'  '.$email.'  '.$telephone.'  '.$probleme);
   	 // header("Location: ?file=Sendmail");
   	 message('Message envoyer avec success');
   	 }
   }
 ?>