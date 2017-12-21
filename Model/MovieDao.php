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
        $stmt = $conn->prepare("SELECT * FROM movie order by imdbRating desc");
        $stmt->execute();
        return $stmt;
        
    }
    
    public function selectRanking() {
        $conn = MovieDao::connectionString();
        $stmt = $conn->prepare("SELECT * FROM movie where userOption = 'Top 10' order by imdbRating desc limit 10");
        $stmt->execute();
        return $stmt; 
    }
    
    public function selectLike($texto) {
        $conn = MovieDao::connectionString();
        $stmt = $conn->prepare("SELECT * FROM movie where Title like '$texto%' order by id");
        $stmt->execute();
        return $stmt;
    }
    
    public function select($object) {
        $conn = MovieDao::connectionString();
        $stmt = $conn->prepare("SELECT * FROM movie where id = '$object'");
        $stmt->execute();
        return $stmt;    
    }
    
    public function insert($object) {
        $conn = MovieDao::connectionString();
        $stmt = $conn->prepare("insert into movie (Title, Year, Rated, Poster, Plot, Actors, Director, Genre, Writer, Country, imdbRating, userOption) values('$object->title', '$object->year', '$object->rated', '$object->poster', '$object->plot', '$object->actors', '$object->director', '$object->genre', '$object->writer', '$object->country', '$object->imdbRating', '$object->userOption');");
        $stmt->execute();
    }

    public function delete($object) {
        $conn = MovieDao::connectionString();
        $stmt = $conn->prepare("delete from movie where id = '$object'");
        $stmt->execute();        
    }

    public function update($object) {
        
    }
    
    
    public function getRecomendations() {
        $conn = MovieDao::connectionString();
        $stmt = $conn->prepare("SELECT * FROM recomendations order by id");
        $stmt->execute();
        return $stmt;
    }

}