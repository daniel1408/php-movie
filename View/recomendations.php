<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                    <h4 style="text-align: center">Estas são as recomendaçõs de filmes dadas por Daniel, o grande sábio da 7ª arte </h4>
                </div>
            </div>
        </div>
    </body>
</html>
