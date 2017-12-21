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
        <title>Adicionar</title>
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
                    <form action="../Posts/adicionar-movie-post.php">
                        <div class="container janela-login-singin">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="panel-heading">
                                        <div class="panel-title text-center">
                                            <h2 class="title"><b>Adicionar Filme</b></h2>
                                            <hr />
                                        </div>
                                    </div>

                                    <p style="text-align:center; color:rgb(121, 121, 121)">É possível encontrar o filme somente pelo nome, mas caso haja dois com o mesmo nome, é preciso adicionar o ano de lançamento.</p>

                                    <div class="form-group">
                                        <label class="cols-sm-2 control-label">Filme</label>    
                                        <input type="text" class="form-control" name="movie" placeholder="Qual filme deseja adicionar?"/>
                                    </div>
                                     <div class="form-group">
                                        <label class="cols-sm-2 control-label">Ano de lançamento</label>    
                                        <input type="text" class="form-control" name="year" placeholder="Qual o ano do filme?"/>
                                    </div>
                                    <div class="form-group">
                                        Como considera esse filme escolhido?

                                        <select id="selectOK" name="option" style="height: 2em; background-color:rgb(255, 255, 255); color:rgb(0, 0, 0)">
                                            <option value="Não visto">Não visto</option>
                                            <option value="Top 10">Top 10</option>
                                            <option value="Ótimo">Ótimo</option>
                                            <option value="Bom">Bom</option>
                                            <option value="Regular">Regular</option>  
                                            <option value="Ruim">Ruim</option>
                                        </select>
                                    </div>

                                    <input type="submit" class="btn my-btn btn-block"></input>
                                </div>
                            </div>
                        </div>
                    </form>

                    
                </div>
            </div>
        </div>        
    </body>
</html>
<?php
    } else {
        header("location: ../index.php");
    }