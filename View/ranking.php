<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                                
                                    <div class="card" style="width: 20rem;">
                                        <div>
                                            @Html.DisplayFor(modelItem => item.Title)
                                        </div>

                                        <a href="#" data-value="@item.Id" class="btnInfo">
                                            <img class="card-img-top    " src="@Html.DisplayFor(modelItem => item.Poster)" alt="Card image cap">
                                        </a>
                                        <div>
                                            <h4>IMDB: <b> @Html.DisplayFor(modelItem => item.imdbRating)</b></h4>
                                        </div>                    
                                    </div>
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

<div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div id="remove"></div>
            </div>
        </div>
    </div>
</div>