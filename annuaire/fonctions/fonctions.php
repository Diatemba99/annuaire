<?php 
  function chargerClass($nomClass)
	{
		require 'model/'.$nomClass.'.php';
	}

	function chargerMesClasses(){
		spl_autoload_register('chargerClass');
	}

	function notEmpty($tab = []){
		for ($i=0; $i < count($tab); $i++) { 
			if(empty($tab[$i])){
				return false;
			}
		}
		return true;
	}

	// cette methode permet d'afficher les messages d'erreur
	function message($texte, $type="danger")
	{
		echo '<div class="alert alert-'.$type.' text-center">'.$texte.'</div>';
	}

	function debutcolonnes(){
		echo "<div class='col-lg-3 col-md-12 mb-4'>
              <div class='card text-center z-depth-2'>
              <div class='card-body'> ";
	}

	function fincolonne(){
       echo "</div>
               </div>
                </div>";
	}
?>