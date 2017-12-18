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

  $controllers = array('home' => ['login', 'sign, about, addMovie, deleteMovie,'
        . 'detailsMovie, notSeen, home, recomendations, seen, ranking, contacts']);

  
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('home', 'login');
    }
  } else {
    call('home', 'login');
  }