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

class UserDao implements IDao{
    //put your code here
    public function connectionString(){
        ini_set('default_charset', 'UTF-8');
        //$conn = new PDO('mysql:host=us-cdbr-azure-southcentral-f.cloudapp.net:3306;dbname=moviedb', "b7aaceb6e91495", "a8081f97");
        $conn = new PDO('mysql:host=127.0.0.1;dbname=moviedb', "daniel", "Furiosa");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->query("SET NAMES utf8"); 
        return $conn;
    }           
    
    public function selectForUserName( $username) {
        $conn = UserDao::connectionString();
        $stmt = $conn->prepare("SELECT * FROM user where login = '$username'");
        $stmt->execute();
        return $stmt;
    }
    
    public function login( $username, $password) {
        $conn = UserDao::connectionString();
        $stmt = $conn->prepare("SELECT * FROM user WHERE login = '$username' and senha = '$password'");
        $stmt->execute();
        return $stmt;
    }
    
    public function insert( $object) {
        $conn = UserDao::connectionString();
        $stmt = $conn->prepare("insert into user(nome, email, login, senha) values ('$object->nome','$object->email','$object->login','$object->senha')");
        $stmt->execute();
    }

    public function delete($object) {
        
    }

    public function select($object) {
        
    }

    public function selectAll() {
        
    }

    public function selectLike($texto) {
        
    }

    public function update($object) {
        
    }

}
