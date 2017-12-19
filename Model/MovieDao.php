<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AutorDao
 *
 * @author daniel
 */
require_once('IDao.php');

class MovieDao implements IDao{
    //put your code here
    public function connectionString(){
        ini_set('default_charset', 'UTF-8');
        $conn = new PDO('mysql:host=127.0.0.1;dbname=moviedb', "daniel", "Furiosa");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->query("SET NAMES utf8"); 
        return $conn;
    }           
    
    public function selectAll() {
        $conn = MovieDao::connectionString();
        $stmt = $conn->prepare("SELECT * FROM movie order by Title");
        $stmt->execute();
        return $stmt;
        
    }
    
    public function selectLike($texto) {
        $conn = MovieDao::connectionString();
        $stmt = $conn->prepare("SELECT * FROM movie where Title like '$texto%' order by id");
        $stmt->execute();
        return $stmt;
    }
    
    public function insert( $object) {
        $conn = MovieDao::connectionString();
        $stmt = $conn->prepare("insert into frase (id, Title, Year, Rated, Poster) values(1, '$object->Title','$object->Year','$object->Rated', '$object->Poster');");
        $stmt->execute();
    }

    public function delete($object) {
        
    }

    public function select($object) {
        
    }

    public function update($object) {
        
    }

}
