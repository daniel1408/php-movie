<?php
    session_start();
    if(isset($_SESSION['user']) && isset($_SESSION['pwd'])){
?>
<html>
    <head>
        <title>Deletar</title>
        <?php require_once ("Shared/imports.php"); ?>
    </head>
    
    <body style="background-color: #F2F2F2; color: black;">
        <?php require_once ("Shared/menu-principal.php"); ?>
    
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <?php require_once ("Shared/menu-lateral.php"); ?>
                </div >
                <div class="col-md-10">
                    <?php
                        $id = $_GET['id'];
                        require_once('../Model/MovieDao.php');
                        try {
                            $stmt = MovieDao::delete($id);
                    ?>
                    
                    <div style="width:60%; margin: 70px auto 0 auto; background-color: white; margin-top: 20px; padding: 3px; text-align: center;  border-radius: 10px">
                            
                        <div class="panel-title text-center">
                            <img src="https://leipglo.files.wordpress.com/2015/05/moviesomu.png?w=300&resize=300%2C223" style="width: 200px">
                            <h3 class="title" ><b>Registro deletado com sucesso.</b></h3>
                        </div>
                    </div>
                    
                    <div class="container" style="width:48%; margin: 10px auto; background-color: white; margin-top: 20px; padding: 3px; text-align: center;  border-radius: 10px">
                        <a href="list.php" class="btn my-btn btn-block"> 
                            Voltar
                        </a>
                    </div>
                    <?php
                        } catch (PDOException $e) {
                            echo 'ERROR: ' . $e->getMessage();
                        }
                        ?>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
    } else {
        header("location: ../index.php");
    }