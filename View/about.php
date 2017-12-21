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
        <title>About</title>
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
                    <h2 style="text-align:center"><b>Movie managment</b></h2>
                    <hr>
                    <div style="width: 60%; margin: 0 auto">
                        <h3>Movie management</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras posuere malesuada vehicula. Donec eu elit nunc. Ut nec tempus lectus, vitae volutpat nibh. Donec ultrices justo metus, id congue ante volutpat ut. Donec consequat nibh ac diam vestibulum consequat. Suspendisse pulvinar eros at leo hendrerit laoreet. Ut velit dolor, lacinia a velit id, tincidunt cursus mi. Aenean varius massa justo, in sollicitudin quam commodo quis. Vivamus est nisi, semper nec nulla quis, auctor condimentum neque. Morbi mollis vel orci nec rhoncus. Fusce facilisis aliquam dolor eget dignissim. Sed sit amet ex consequat purus rutrum congue. Sed bibendum quam quis enim mollis malesuada. Vivamus egestas dui neque, id lobortis urna accumsan id. Mauris sit amet ipsum faucibus, aliquam nisi a, sagittis mauris.</p>
                        <img src="https://leipglo.files.wordpress.com/2015/05/moviesomu.png?w=300&resize=300%2C223">
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