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
        <title>Meus filmes</title>
        <?php require_once ("Shared/imports.php"); ?>
    </head>
    
    <body >        
        <?php require_once ("Shared/menu-principal.php"); ?>
    
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <?php require_once ("Shared/menu-lateral.php"); ?>
                </div >
                <div class="col-md-10">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 style="text-align: center"><b>Minha Lista</b></h2>

                                <a class="btn my-btn" href="add.php"> 
                                    Encontrar Novo Filme
                                </a>

                                <hr>
                                <?php
//                                    spl_autoload_register(function ($class_name) {
//                                        require_once './Model/' . $class_name . '.php';
//                                    });
                                require_once('../Model/MovieDao.php');
                                    try {
                                        $parametro = filter_input(INPUT_GET, "parametro");
                                        if($parametro){             
                                            $stmt = MovieDao::selectLike($parametro);
                                        }else{
                                            $stmt = MovieDao::selectAll();
                                        }
                                        while($row = $stmt->fetch()) {
                                ?>
                                
                                <div class="card" style="width: 13.0rem;">
                                    <div style="background-color: rgb(8, 14, 20); color: white;">
                                        <h5><b> <?php echo $row['userOption']?></b></h5>
                                    </div>
                                    
                                    <div style="width: 95% ;margin: 0px; font-size: 12px; color: black; background-color: white; text-overflow: ellipsis; overflow: hidden; white-space: nowrap" >
                                        <p style="padding:0 10px"><?php echo $row['Title']?></p>
                                    </div>
                                    
                                    <!--<p><?php echo $row['userOption']?></p>-->
                                    
                                    <a href="#" data-value="<?php echo $row['id']?>" class="btnInfo"> 
                                        <img class="card-img-top" src="<?php echo $row['Poster']?>" alt="Card image cap">
                                    </a>
                                    
                                    <a href="delete.php?id=<?php echo $row['id']?>" class="btnRemove btn">
                                        Remover
                                    </a>
                                    
                                    <div style="border: 2px solid white; background-color: rgb(8, 14, 20); color: white; width: 30%; position:relative; float: right; margin-top: -200px; margin-right: -10px; border-radius: 10px">
                                        <h5><b> <?php echo $row['imdbRating']?></b></h5>
                                    </div>
                                </div>
                                
                                <?php

                                         }
                                     } catch (PDOException $e) {
                                         echo 'ERROR: ' . $e->getMessage();
                                     }
                                 ?>  
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
    </body>
</html>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div id="details"></div>
            </div>
        </div>
    </div>
</div>


<?php
    } else {
        header("location: ../index.php");
    }