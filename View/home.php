<?php
    session_start();
    if(isset($_SESSION['user']) && isset($_SESSION['pwd'])){
?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>

        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    
    <body>        
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                
                <div style=" width: 10%; position:relative; float:left">
                    
                    <a href="" id="iconMenu" style="margin-left:30%">
                        <img src="http://www.piratebrands.com/images/menu.png" width="50px">
                    </a>
                </div>

                <div class="navbar-collapse collapse" style=" width:80%; position:relative;float:right"> 
                    <div class="campo-busca" style="margin-left: 23%">
                        <form>
                            <input class="form-control mr-sm-2 " type="text" placeholder="Qual filme deseja encontrar hoje?" aria-label="Search">
                            <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                        </form>
                    </div>


                    <ul class="nav navbar-nav" style="position:relative; float:right;">
                            <li>
                                <a href="logout.php">
                                    Logout
                                </a>
                            </li>
                            <?php
                                if(!isset($_SESSION['user']) && !isset($_SESSION['user'])){
                            ?>
                            <li>
                                <a href="login.php" class="btnLogin">
                                <!-- <a asp-area="" asp-controller="Home" asp-action="Login"> -->
                                    Entrar
                                </a>
                            </li>
                            <li>
                                <a href="sign.php" class="btnSing">
                                <!-- <a asp-area="" asp-controller="Home" asp-action="Sing"> -->
                                    Criar Conta
                                </a>
                            </li>
                            <?php
                                }
                            ?>
                    </ul>
                </div>
            </div>
        </nav>
    
    
    <!-- Incicio barra lateral -->
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div id="lateral">
                        <div id="menu">
                            <ul class="box">
                                
                                <li style="margin-top:3em">
                                    <a asp-area="" asp-controller="Home" asp-action="Index">
                                        <img src="http://cdn.mysitemyway.com/etc-mysitemyway/icons/legacy-previews/icons/black-inlay-crystal-clear-bubble-icons-business/077302-black-inlay-crystal-clear-bubble-icon-business-home5.png" style="width:100px">
                                    </a>
                                </li>
                                    <li>
                                        <!--
                                        <a href="./index.php/myController/myActio/?id=1" 
                                        class="btn btn-success btn-block">mylinktext</a>
                                        -->
                                        <!--
                                        <form action="caminho/ProdutoController/insere" >
                                        -->                                       
                                        <a href="list.php">
                                            Meus Filmes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ranking.php">
                                            Meu Top 10
                                        </a>
                                    </li>
                                    <li>
                                        <a href="recomendations.php">
                                            Recomendações
                                        </a>
                                    </li>
                                    <li>
                                        <a href="not-seen.php">
                                            Não vistos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="seen.php">
                                            Vistos
                                        </a>
                                    </li>

                                    <li>
                                        <a href="about.php">
                                            Sobre o Site
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contacts.php">
                                            Contatos
                                        </a>
                                    </li>
                            </ul>

                        </div>
                    </div>
                </div >
                <div class="col-md-10">
                    <div style="color: black;">
                        <h2 class="container-fluid text-center"><b>Olá  <?php echo ($_SESSION['user']) ?> </b></h2>
                    </div>
                    
                    <div class="container-fluid">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="https://davecsimpson.files.wordpress.com/2015/05/joe.png" alt="ASP.NET" class="img-responsive" />
                                <!-- <div class="carousel-caption" role="option">
                                </div> -->
                            </div>
                                <div class="item">
                                    <img src="https://images3.alphacoders.com/876/thumb-1920-87675.jpg" alt="Visual Studio" class="img-responsive" />
                                    <!-- <div class="carousel-caption" role="option">
                                    </div> -->
                                </div>
                                <div class="item">
                                    <img src="https://i.imgur.com/VD8TMkx.jpg" alt="Package Management" class="img-responsive" />
                                    <!-- <div class="carousel-caption" role="option">
                                    </div> -->
                                </div>
                                <div class="item">
                                    <img src="https://jvhageshii01.files.wordpress.com/2015/05/superhero_wallpaper__hulkbuster_by_ninja_of_athens-d83u9um.jpg" alt="Microsoft Azure" class="img-responsive" />
                                    <!-- <div class="carousel-caption" role="option">
                                    </div> -->
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
                    </div>
                </div>
            </div>
        </div>
        <!-- FIm barra lateral -->
        
        <environment include="Development">
            <script src="~/lib/jquery/dist/jquery.js"></script>
            <script src="~/lib/bootstrap/dist/js/bootstrap.js"></script>
            <script src="../js.js" asp-append-version="true"></script>
        </environment>
        <environment exclude="Development">
            <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-2.2.0.min.js"
                    asp-fallback-src="~/lib/jquery/dist/jquery.min.js"
                    asp-fallback-test="window.jQuery"
                    crossorigin="anonymous"
                    integrity="sha384-K+ctZQ+LL8q6tP7I94W+qzQsfRV2a+AfHIi9k8z8l9ggpc8X+Ytst4yBo/hH+8Fk">
            </script>
            <script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/bootstrap.min.js"
                    asp-fallback-src="~/lib/bootstrap/dist/js/bootstrap.min.js"
                    asp-fallback-test="window.jQuery && window.jQuery.fn && window.jQuery.fn.modal"
                    crossorigin="anonymous"
                    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa">
            </script>
            <script src="../js.js" asp-append-version="true"></script>
        </environment>
        
    </body>
</html>
<?php
    } else {
        header("location: ../index.php");
    }