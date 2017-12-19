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
    
    <body>        
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

                                <a class="btn  my-btn" href="add.php"> 
                                    Encontrar Novo Filme
                                </a>

                                <hr>
                                <?php
//                                    spl_autoload_register(function ($class_name) {
//                                        include './Model/' . $class_name . '.php';
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
                                <div class="card" style="width: 16.0rem;">
                                    <p>Opcao usuario</p>
                                    <a href="#" data-value="1" class="btnInfo"> 
                                        <img class="card-img-top" src="<?php echo $row['Poster']?>" alt="Card image cap">
                                    </a>

                                    <div>
                                        <p class="card-title"><?php echo $row['Title']?></p>
                                    </div>
                                    <a href="#" data-value="1" class="btnRemove">
                                        Remover
                                    </a>
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

<div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div id="remove"></div>
            </div>
        </div>
    </div>
</div>

<?php
    } else {
        header("location: ../index.php");
    }