<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>        
        <title>Recomendaçoes</title>
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
                    <h2 style="text-align: center"><b>Recomendação do site</b></h2>
                    <h4 style="text-align: center">Estas são as recomendaçõs de filmes dadas por Daniel, o grande sábio da 7ª arte </h4>

                    <table class="table">
                        <tr>
                            <th>
                                @Html.DisplayNameFor(model => model.Title)
                            </th>
                            <th>
                                @Html.DisplayNameFor(model => model.imdbRating)
                            </th>
                            <th>

                            </th>
                        </tr>

                        <tr>
                            <td>
                                @Html.DisplayFor(modelItem => item.Title)
                            </td>
                            <td>
                                @Html.DisplayFor(modelItem => item.imdbRating)
                            </td>
                            <td>
                                <a class="btn btn-info" asp-controller="Filmes" asp-action="Adicionar"> 
                                    Adicionar à minha lista
                                </a>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
