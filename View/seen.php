<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Filmes Vistos</title>
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
                    <h2 style="text-align: center"><b>Filmes vistos</b></h2>
                    <h4 style="text-align: center">Ordenados por nota do IMDB</h4>

                    <hr>
                        <div class="card" style="width: 12.5rem;">         

                            <a href="#" data-value="@item.Id" class="btnInfo"> 
                                <img class="card-img-top" src="@Html.DisplayFor(modelItem => item.Poster)" alt="Card image cap">
                            </a>

                            <div>
                                <p class="card-title">@Html.DisplayFor(modelItem => item.Title)</p>
                            </div>
                            <div>
                                <h6>IMDB: <b> @Html.DisplayFor(modelItem => item.imdbRating)</b></h6>
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