<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>

        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap.min.css"
            asp-fallback-href="~/lib/bootstrap/dist/css/bootstrap.min.css"
            asp-fallback-test-class="sr-only" asp-fallback-test-property="position" asp-fallback-test-value="absolute" />
        <link rel="stylesheet" href="../style.css" asp-append-version="true" />
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
                            <li><a asp-area="" asp-controller="Home" asp-action="Logout">Logout</a></li>
                            <li>
                                <a href="#" class="btnLogin">
                                <!-- <a asp-area="" asp-controller="Home" asp-action="Login"> -->
                                    Entrar
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btnSing">
                                <!-- <a asp-area="" asp-controller="Home" asp-action="Sing"> -->
                                    Criar Conta
                                </a>
                            </li>
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
                                        <a asp-controller="Filmes" asp-action="Listar">
                                            Meus Filmes
                                        </a>
                                    </li>
                                    <li>
                                        <a asp-controller="Filmes" asp-action="Ranking">
                                            Meu Top 10
                                        </a>
                                    </li>
                                    <li>
                                        <a asp-controller="Filmes" asp-action="Recomendations">
                                            Recomendações
                                        </a>
                                    </li>
                                    <li>
                                        <a asp-controller="Filmes" asp-action="NaoVistos">
                                            Não vistos
                                        </a>
                                    </li>
                                    <li>
                                        <a asp-controller="Filmes" asp-action="Vistos">
                                            Vistos
                                        </a>
                                    </li>

                                    <li>
                                        <a asp-controller="Home" asp-action="About">
                                            Sobre o Site
                                        </a>
                                    </li>
                                    <li>
                                        <a asp-controller="Home" asp-action="Contact">
                                            Contatos
                                        </a>
                                    </li>
                            </ul>

                        </div>
                    </div>
                </div >
                <div class="col-md-10">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 style="text-align: center"><b>Minha Lista</b></h2>

                                <a class="btn  my-btn" asp-controller="Filmes" asp-action="Adicionar"> 
                                    Encontrar Novo Filme
                                </a>

                                <hr>
                                    <div class="card" style="width: 16.5rem;">
                                        <p>Opcao usuario</p>
                                        <a href="#" data-value="@item.Id" class="btnInfo"> 
                                            <img class="card-img-top" src="@Html.DisplayFor(modelItem => item.Poster)" alt="Card image cap">
                                        </a>

                                        <div>
                                            <p class="card-title">Titulo</p>
                                        </div>
                                        <a href="#" data-value="@item.Id" class="btnRemove">
                                            Remover
                                        </a>
                                    </div>
                            </div>
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