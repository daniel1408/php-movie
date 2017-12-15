<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeController
 *
 * @author daniel
 */
class HomeController {
    //put your code here
    public function login() {
      require_once('View/System/login.php');
    }

    public function sign() {
      require_once('View/System/sing.php');
    }
    
    public function about() {
      require_once('View/about.php');
    }
    
    public function addMovie() {
      require_once('View/add.php');
    }
    
    public function deleteMovie() {
      require_once('View/delete.php');
    }

    public function detailsMovie() {
      require_once('View/details.php');
    }
    
    public function home() {
      require_once('View/home.php');
    }
    
    public function listMovie() {
      require_once('View/list.php');
    }
    
    public function notSeen() {
      require_once('View/not-seen.php');
    }
    
    public function recomendations() {
      require_once('View/recomendations.php');
    }
    
    public function seen() {
      require_once('View/seen.php');
    }
    
    public function ranking() {
      require_once('View/ranking.php');
    }
    
    public function contacts() {
      require_once('View/contacts.php');
    }
    
}
