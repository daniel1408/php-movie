<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div id="lateral">
    <div id="menu">
        <ul class="box">
            <li style="margin-top:3em">
                <a href="home.php">
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

<environment include="Development">
    <script src="~/lib/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../js.js" asp-append-version="true"></script>
</environment>

<environment exclude="Development">
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-2.2.0.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/bootstrap.min.js"></script>
    <script src="../js.js" asp-append-version="true"></script>
</environment>
