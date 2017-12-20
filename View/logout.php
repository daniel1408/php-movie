
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>Logout</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body style="background-color: #F2F2F2; color: black;">
        <div class="panel-title text-center">
            <img src="https://leipglo.files.wordpress.com/2015/05/moviesomu.png?w=300&resize=300%2C223" style="width: 140px">
            <h3 class="title" ><b>Logout realizado.</b></h3>
        </div>
        <div class="container" style="width:25%; margin: 0 auto; background-color: white; padding: 15px; border-radius: 10px ">
            <?php
                session_start();
                session_destroy();
            ?>
            <h3 class="text-center">Clique no botao abaixo para fazer o <b>Login novamente.</b></h3>
            <br>
            
            <div>
                <a class="btn my-btn btn-block btn-lg" href="../index.php" style="margin:5px">Login</a>
            </div>
        </div>
    </body>
</html>