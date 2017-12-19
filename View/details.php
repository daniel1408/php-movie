<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Detalhes</title>
        <?php require_once ("Shared/imports.php"); ?>
    </head>
    <body>
        <div class="container">
            <div style="width:48%;">
                <div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </div>

                <h3 style="text-align:center"><b>@Html.DisplayFor(model => model.Title)</b> (@Html.DisplayFor(model => model.Year))</h3>
                <hr>
            </div>

            <div class="row">

                <div class="col-md-2">

                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="@Html.DisplayFor(model => model.Poster)" alt="Card image cap">
                        <div>
                            <h4>IMDB: <b> @Html.DisplayFor(model => model.imdbRating)</b></h4>
                        </div>     
                    </div>
                </div>

                <div class="col-md-8">
                    <div style="margin-left: 3%; width:45%">

                        <p>
                            <b>Sinopse:</b> @Html.DisplayFor(model => model.Plot)
                        </p>
                        <p>
                            <b>Diretor:</b> @Html.DisplayFor(model => model.Director)
                        </p>
                        <p>
                            <b>Genero:</b> @Html.DisplayFor(model => model.Genre)
                        </p>
                        <p>
                            <b>Elenco:</b> @Html.DisplayFor(model => model.Actors)
                        </p>
                        <p>
                            <b>Roteiristas:</b> @Html.DisplayFor(model => model.Writer)
                        </p>
                        <p>
                            <b>País:</b> @Html.DisplayFor(model => model.Country)
                        </p>
                        <p>
                            <b>Duração:</b> @Html.DisplayFor(model => model.Runtime)
                        </p>
                        <p>
                            <b>Lançamento:</b> @Html.DisplayFor(model => model.Released)
                        </p>
                        <p>
                            <b>Prêmiações:</b> @Html.DisplayFor(model => model.Awards)
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div id="delete"></div>
            </div>
        </div>
    </div>
</div>
