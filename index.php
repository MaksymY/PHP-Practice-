<?php

// inclusion des fichiers principaux
  include_once '_config/config.php';
  include_once '_config/db.php';
  include_once '_functions/functions.php';

//Definition de la page courante
if(isset($_GET['page']) && !empty($_GET['page'])) {
  $page = trim(strtolower($_GET['page']));
} else {
    $page = 'home';
};

//Array contenant tout les pages
$allPages = scandir('controllers/');

if (in_array($page.'_controller.php', $allPages)){

  //inclure la page
  include_once 'models/'.$page.'_model.php';
  include_once 'controllers/'.$page.'_controller.php';
  include_once 'views/'.$page.'_view.php';

}else{
  echo'Erreur 404';
}


?>

