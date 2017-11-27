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
        <title>Nao encontrado</title>

        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap.min.css"
            asp-fallback-href="~/lib/bootstrap/dist/css/bootstrap.min.css"
            asp-fallback-test-class="sr-only" asp-fallback-test-property="position" asp-fallback-test-value="absolute" />
        <link rel="stylesheet" href="../style.css" asp-append-version="true" />
    </head>
    <body>
        <div class="container">
            <div style="width:50%; margin: 0 auto">
                <img src="https://cms-assets.tutsplus.com/uploads/users/30/posts/25489/image/pac-404.png">
                <h3 style="text-align:center"><b>Infelizmente não encontramos o filme </b></h3>
                <a class="btn my-btn btn-block" asp-controller="Filmes" asp-action="Adicionar"> 
                    Voltar
                </a>
            </div>
        </div>
    </body>
</html>
