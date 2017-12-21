<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    session_start();
    if(isset($_SESSION['user']) && isset($_SESSION['pwd'])){
?>
<html>
    <head>        
        <title>Recomendaçoes</title>
        <?php require_once ("Shared/imports.php"); ?>
    </head>
    
    <body>        
        <?php require_once ("Shared/menu-principal.php"); ?>
    
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <?php require_once ("Shared/menu-lateral.php"); ?>
                </div >
                <div class="col-md-10">
                    <h2 style="text-align: center"><b>Recomendação</b></h2>
                    <div style="margin-bottom: 4px">
                        <a class="btn  my-btn" href="add.php" style="margin-left: 94px"> 
                            Encontrar Novo Filme
                        </a>
                    </div>
                    
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-1">
                                <ul class="list-group">
                                    <?php
                                        require_once('../Model/MovieDao.php');
                                        try {
                                            $stmt = MovieDao::getRecomendations();                                
                                            while($row = $stmt->fetch()) {
                                    ?>

                                    <li class="list-group-item"><h5><b><?php echo $row['id']?></b></h5></li>

                                    <?php

                                             }
                                         } catch (PDOException $e) {
                                             echo 'ERROR: ' . $e->getMessage();
                                         }
                                     ?> 
                                </ul>
                            </div >
                            <div class="col-md-11">
                                <ul class="list-group">
                                <?php
                                    require_once('../Model/MovieDao.php');
                                        try {
                                            $stmt = MovieDao::getRecomendations();                                
                                            while($row = $stmt->fetch()) {
                                    ?>

                                    <li class="list-group-item"><h5><?php echo $row['Title']?></h5></li>

                                    <?php

                                             }
                                         } catch (PDOException $e) {
                                             echo 'ERROR: ' . $e->getMessage();
                                         }
                                     ?> 
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h4 style="text-align: center"><b>Estas são as recomendaçõs de filmes dadas por Daniel, o grande sábio da 7ª arte</b></h4>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
    } else {
        header("location: ../index.php");
    }