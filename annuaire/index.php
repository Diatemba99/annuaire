<?php 
session_start();
  require 'fonctions/fonctions.php';
  require 'fonctions/constantes.php';
  chargerMesClasses();  
  $db = new Databases();

   if (isset($_GET['file'])) {
   	switch ($_GET['file']) {
   		case 'acceuil':
   			require 'acceuil.php';
   			break;

   	    case 'communaute':
   			require 'communaute.php';
   			break;

   		case 'inscription':
   			require 'controller/traitementInspage.php';
   			break;

        case 'connexion':
        require 'controller/traitementConnect.php';
        break;

        case 'deconnexion':
        session_destroy();
        require_once 'acceuil.php';
        break;

        case 'contact':
        require 'view/Contacts.php';
        break;

   		  case 'insPage':
   			require 'insPage.php';
   			break;

        case 'goadmin':
        require 'admin.php';
        break;

         case 'goadminSimple':
        require 'adminSimple.php';
        break;

        case 'connexions':
        require 'connect.php';
        break;	

        case 'filmdetail':
        require"view/detailsfilm.php";
        $list=$db->recuperationId($_GET['film']);
        break;

        case 'filmdelete':
        $liste=$db->deletefilmId($_GET['film']);
        require"admin.php";
        break;

        case 'communauteAdmin':
        require 'view/communauteAdmin.php';
        break;

        case 'communauteUser':
        require 'view/communauteUser.php';
        break;

        case 'acceuilAdmin':
        require 'admin.php';
        break;

        case 'gestion':
        require 'view/gestionAnnuaire.php';
        break;

        case 'insererFilm':
        require 'controller/traitementGestion.php';
        break;

        case 'tinspage':
        require 'connect.php';
        break;

        case 'insertFilm':
          require'admin.php';
          break;
        case 'actions':
          require 'view/allActions.php';
          break;

          case 'vengeance':
          require 'view/allVengeances.php';
          break;

          case 'mangas':
            require 'view/allMangas.php';
            break;

            case 'traitementcontact':
              require'controller/traitementMail.php';
              break;

            case 'Sendmail':
              require'adminSimple.php';
              break;


   	}
   }else{
   	 require('acceuil.php');
   }
 ?>  