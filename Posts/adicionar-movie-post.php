<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>

<?php
    session_start();
    if(isset($_SESSION['user']) && isset($_SESSION['user'])){
    $usuario = $_SESSION['user'];
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        $movieName = filter_input(INPUT_GET, "movie");
        $movieYear = filter_input(INPUT_GET, "year");
        $UserOption = filter_input(INPUT_GET, "option");
        
        spl_autoload_register(function ($class_name) {
            include '../Model/' . $class_name . '.php';
        });
        
        try {
            
            $url = "http://www.omdbapi.com/?t=" . $movieName ."&y=" . $movieYear ."&apikey=8af6a417";
            $url = str_replace(" ", "%20", $url);
            $json = file_get_contents($url);
            $data = json_decode($json, true);
//            $date->userOption = $UserOption;
            
            
            $stmt = MovieDao::insert($data);
            FraseDao::insert($frase);
            
            header("Location: ../View/list.php");
            
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();        
        }
    } else {
        header("location: ../index.php");
    }