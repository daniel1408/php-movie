<html>
    <head>
        <title>Detalhes</title>
        <?php require_once ("Shared/imports.php"); ?>
    </head>
    
    <body>        
        <?php require_once ("Shared/menu-principal.php"); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <?php require_once ("Shared/menu-lateral.php"); ?>
                </div >
                
                    <?php require_once ("Shared/menu-lateral.php"); 
                        $id = $_GET['id'];
                        require_once('../Model/MovieDao.php');
                        try {
                            $stmt = MovieDao::select($id);
                            while($row = $stmt->fetch()) {
                    ?>
                <div class="col-md-10">
                    <div class="container">
                        <div style="width:48%;">
                            <h3 style="text-align:center"><b><?php echo $row['Title']?></b> <?php echo $row['Year']?></h3>
                            <hr>
                        </div>

                        <div class="row">

                            <div class="col-md-2">

                                <div class="card" style="width: 20rem;">
                                    <img class="card-img-top" src="<?php echo $row['Poster']?>" alt="Card image cap">
                                    <div>
                                        <h4>IMDB: <b><?php echo $row['imdbRating']?></b></h4>
                                    </div>     
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div style="margin-left: 3%; width:45%">

                                    <p>
                                        <b>Sinopse:</b> <?php echo $row['Plot']?>
                                    </p>
                                    <p>
                                        <b>Diretor:</b> <?php echo $row['Director']?>
                                    </p>
                                    <p>
                                        <b>Genero:</b> <?php echo $row['Genre']?>
                                    </p>
                                    <p>
                                        <b>Elenco:</b> <?php echo $row['Actors']?>
                                    </p>
                                    <p>
                                        <b>Roteiristas:</b> <?php echo $row['Writer']?>
                                    </p>
                                    <p>
                                        <b>País:</b> <?php echo $row['Country']?>
                                    </p>
                                    <p>
                                        <b>Rated:</b> <?php echo $row['Rated']?>
                                    </p>
                                </div>
                            </div>
                        </div>
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
    </body>
</html>