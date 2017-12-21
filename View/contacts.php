<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
    if(isset($_SESSION['user']) && isset($_SESSION['pwd'])){
?>
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
                    <h2 style="text-align:center"><b>Contatos</b></h2>
                    <hr>
                    <div style="width: 60%; margin: 0 auto">
                        <address>
                            One Daniel Way<br />
                            Redmond, WA 98052-6399<br />
                            <span>P:</span>425.555.0100
                        </address>

                        <address>
                            <strong>Suporte:</strong> <a href="mailto:Support@example.com">daniel-costa@ufu.br</a><br />
                            <strong>Marketing:</strong> <a href="mailto:Marketing@example.com">dani.coen@hotmail.com</a>
                        </address>

                        <img src="https://leipglo.files.wordpress.com/2015/05/moviesomu.png?w=300&resize=300%2C223">
                        <h3 style="text-align:center"><b>Mais informações </b>podem ser encontradas no espetacular site: www.google.com.br</h3>
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