<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Criar Conta</title>

        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap.min.css"
            asp-fallback-href="~/lib/bootstrap/dist/css/bootstrap.min.css"
            asp-fallback-test-class="sr-only" asp-fallback-test-property="position" asp-fallback-test-value="absolute" />
        <link rel="stylesheet" href="../style.css" asp-append-version="true" />
    </head>
    <body style="background-image: url(https://hdwallpaper20.com/wp-content/uploads/2017/08/Play-Wonder-Woman-Full-Movie-An-Amazon-princess-comes-to-the-world-of-Man-to-become-the-greatest-of-wallpaper-wp2009036.jpg);">
        <div class="form-horizontal">
            <form method="post" action="?go=cadastrar">
                <div class="container" style="width:45%; margin: 0 auto">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <h3 class="title"><b>Criar Conta</b></h3>
                                    <hr />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="FirstName" class="cols-sm-2 control-label">Nome</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="FirstName" id="FirstName"  placeholder="Digite seu nome"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Email" class="cols-sm-2 control-label">E-mail</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="email" class="form-control" name="Email" id="Email"  placeholder="Digite seu e-mail"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Username" class="cols-sm-2 control-label">Nome de usuário</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="Username" id="Username"  placeholder="Digite seu nome de usuário"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Password" class="cols-sm-2 control-label">Senha</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="Password" id="Password"  placeholder="Digite sua senha"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ConfirmPassword" class="cols-sm-2 control-label">Confirmar Senha</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword"  placeholder="Digite novamente sua senha"/>                                        
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="Registrar" class="btn my-btn btn-block">
                        </div>
                    </div>
                </div>  
            </form>
        </div>
    </body>
</html>

<?php
if(@$_GET['go'] == 'cadastrar'){
	$nome = $_POST['FirstName'];
	$email = $_POST['Email'];
	$username = $_POST['Username'];
	$password = $_POST['Password'];

	if(empty($nome)){
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}elseif(empty($email)){
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}elseif(empty($username)){
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}elseif(empty($password)){
		echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
	}else{
            
            spl_autoload_register(function ($class_name) {
                include '../Model/' . $class_name . '.php';
            });
                
            try {
                $stmt = UserDao::selectForUserName($username);
                $row = $stmt->fetch();
                
                if($row['login'] != null){
                    echo "<script>alert('Usuário já existe.');history.back();</script>"; 
                }else{
                    $user = new User();
                    $user->setNome($nome);
                    $user->setEmail($email);
                    $user->setLogin($username);
                    $user->setSenha($password);
                    
                    UserDao::insert($user);
                    echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
                    echo "<meta http-equiv='refresh' content='0, ../'>";
                }
            } catch (PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();        
            }
	}
    }

    