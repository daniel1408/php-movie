<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
        <div style="width:48%;">
            <div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </div>

            <h3 style="text-align:center">Filme <b>@Html.DisplayFor(model => model.Title)</b> deletado.</h3>
            <hr>

            <div class="card" style="width: 20rem; margin-left:30%">
                <img class="card-img-top" src="@Html.DisplayFor(model => model.Poster)" alt="Card image cap">
            </div>
        </div>
    </div>
    </body>
</html>
