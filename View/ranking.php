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
        <title>Meu TOP 10</title>
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
                                <h2 style="text-align: center"><b>Meu Top 10</b></h2>
                                <h4 style="text-align: center">Ordenados por nota do IMDB</h4>
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
                                        $stmt = MovieDao::selectRanking();
                                    }
                                    $count = 1;
                                    while($row = $stmt->fetch()) {
                                        ?>
                                        <div class="card" style="width: 13rem;">
                                            <div style="background-color: black; color: white; font-size: 15px;">
                                                <?php echo $count?>
                                            </div>
                                            
                                            
                                            <div style="font-size: 14px;">
                                                <?php echo $row['Title']?>
                                            </div>

                                            <a href="#" data-value="<?php echo $row['id']?>" class="btnInfo">
                                                <img class="card-img-top    " src="<?php echo $row['Poster']?>">
                                            </a>
                                            <div style="background-color: black; color: white">
                                                <h5>IMDB: <b> <?php echo $row['imdbRating']?></b></h5>
                                            </div>                    
                                        </div>
                                        <?php
                                        $count++;
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