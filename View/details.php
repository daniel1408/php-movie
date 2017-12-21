  
        
<?php
    session_start();
    if(isset($_SESSION['user']) && isset($_SESSION['pwd'])){

    $id = $_GET['id'];    
    require_once('../Model/MovieDao.php');
    try {
        $stmt = MovieDao::select($id);
        while($row = $stmt->fetch()) {
?>
<div class="container">
    <div style="width:48%;">
        <div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"  style="color: white">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <h3 style="text-align:center; background-color: black; color: white; border-radius: 10px"><b><?php echo $row['Title']?></b> <?php echo $row['Year']?></h3>
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
<?php        
        
    }    

        } catch (PDOException $e) {
?>
        <div class="container">
            <div style="width:48%;">
                <div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </div>
                <h1>Nao foi possivel encontrar o registro</h1>
            </div>
        </div>
<?php     
        echo 'ERROR: ' . $e->getMessage();
    }
    
    
    } else {
        header("location: ../index.php");
    }