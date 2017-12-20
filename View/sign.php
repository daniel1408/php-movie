<html>
    <head>
        <title>Criar Conta</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../style.css" asp-append-version="true" />
    </head>
    <body style="background-color: #F2F2F2; color: black;">
        <div class="panel-title text-center">
            <img src="https://leipglo.files.wordpress.com/2015/05/moviesomu.png?w=300&resize=300%2C223" style="width: 100px">
            <h3 class="title" ><b>Login</b></h3>
        </div>
        <form method="post" action="?go=cadastrar">
            <div class="container" style="width:25%; margin: 0 auto; background-color: white; padding: 15px; border-radius: 10px ">
                <div class="row">
                    <div class="col-md-12">
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
                        <input type="submit" value="Registrar" class="btn my-btn btn-block">
                    </div>
                </div>
            </div>
        </form>
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

    