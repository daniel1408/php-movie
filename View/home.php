<?php
    session_start();
    if(isset($_SESSION['user']) && isset($_SESSION['pwd'])){
?>

<html>
    <head>
        <title>Home</title>
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
                        <div style="color: white; background-color: black">
                            <h2 class="container-fluid text-center"><b>Olá  <?php echo ($_SESSION['user']) ?> </b></h2>
                        </div>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="http://animationmoviewallpapers.com/wp-content/uploads/2016/03/Kubo-and-the-Two-Strings-Animation-Movie-Wallpaper-38.jpg" class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="https://images3.alphacoders.com/876/thumb-1920-87675.jpg" class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="https://davecsimpson.files.wordpress.com/2015/05/joe.png" class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="http://www.canalnerd.com.br/wp-content/uploads/2014/02/10-coisas-que-aprendemos-no-trailer-de-Guardi%C3%B5es-da-Gal%C3%A1xia-Capa.jpg" class="img-responsive"/>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Proximo</span>
                            </a>
                        </div>
                        <div style="color: white; background-color: black; height: 7%;">
                            <h3 class="container-fluid text-center" style="padding: 5px">Bem vindo ao <b>Sistema de Gerenciamento de Filmes </b></h3>
                        </div>
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