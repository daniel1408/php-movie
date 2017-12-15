<?php

  function call($controller, $action) {
    
    require_once('Controller/' . $controller . '-controller.php');

    switch($controller) {
      case 'home':
        $controller = new HomeController();
      break;
    }

    $controller->{ $action }();
  }
  
    $controllers = array('home' => ['home', 'login, sign, about, '
      . 'addMovie, deleteMovie, detailsMovie, listMovie, notSeen, '
      . 'recomendations, seen, ranking, contacts']);

  
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('home', 'home');
    }
  } else {
    call('home', 'home');
  }
