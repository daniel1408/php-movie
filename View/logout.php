
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>Logout</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body style="color: white">
        <div class="container">
            <?php
                session_start();
                session_destroy();
            ?>
            <h2 class="text-center"><b>Logout feito com sucesso.</b> <br> Clique no botao abaixo para fazer o Login novamente.</h2>
            <br>
            
            <div>
                <a class="btn my-btn btn-block btn-lg" href="../index.php" style="margin:5px">Login</a>
            </div>
        </div>
    </body>
</html>