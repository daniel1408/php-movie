<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="./style.css" asp-append-version="true" />
    </head>
    <body style="color: black;">
        <form method="post" action="?go=logar">
            <div class="container" style="width:45%; margin: 0 auto">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-heading">
                            <div class="panel-title text-center">
                                <h3 class="title" ><b>Entrar</b></h3>
                                <hr />
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Username</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="username" id="username"  placeholder="Digite o nome de usuário"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Senha</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password" id="password"  placeholder="Digite sua senha"/>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Entrar" class="btn my-btn btn-block" id="entrar">
                        <a href="./View/sign.php" class="btn btnSing">Não tenho conta</a>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
    
<?php
if(@$_GET['go'] == 'logar'){
	$user = $_POST['username'];
	$pwd = $_POST['password'];

	if(empty($user)){
		echo "<script>alert('Preencha todos os campos para logar-se.'); history.back();</script>";
	}elseif(empty($pwd)){
		echo "<script>alert('Preencha todos os campos para logar-se.'); history.back();</script>";
	}else{
                
                spl_autoload_register(function ($class_name) {
                    include './Model/' . $class_name . '.php';
                });
                
                try {
                    $stmt = UserDao::login($user, $pwd);                    
                    $row = $stmt->fetch();
                    
                    if($row['login'] != null){
                        session_start();
                        $_SESSION['user'] = $user;
                        $_SESSION['pwd'] = $pwd;
                        echo "<script>alert('Usuário logado com sucesso.');</script>";
                        echo "<meta http-equiv='refresh' content='0, ./View/home.php'>";
                    }else{
                        echo  "<script>alert('Usuário e senha não correspondem.');</script>";
                        echo "<meta http-equiv='refresh' content='0, ./index.php'>";
                    }
                } catch (PDOException $e) {
                    echo 'ERROR: ' . $e->getMessage();
                }
	}
}