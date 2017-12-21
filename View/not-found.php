<?php
    session_start();
    if(isset($_SESSION['user']) && isset($_SESSION['pwd'])){
?>
<html>
    <head>
        <title>Nao encontrado</title>
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
                    <div style="width:60%; margin: 70px auto 0 auto; background-color: white; margin-top: 20px; padding: 3px; text-align: center;  border-radius: 10px">
                            
                        <div class="panel-title text-center">
                            <img src="https://leipglo.files.wordpress.com/2015/05/moviesomu.png?w=300&resize=300%2C223" style="width: 200px">
                            <h3 class="title" ><b>Infelizmente não encontramos o filme.</b></h3>
                            <h5>Revise o nome ou adicione o ano do filmes para aprimorar a busca</h5>
                        </div>
                    </div>
                    
                    <div class="container" style="width:48%; margin: 10px auto; background-color: white; margin-top: 20px; padding: 3px; text-align: center;  border-radius: 10px">
                        <a href="add.php" class="btn my-btn btn-block"> 
                            Voltar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
    } else {
        header("location: ../index.php");
    }