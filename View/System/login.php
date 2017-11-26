
<form class="form-horizontal" asp-controller="Home" asp-action="Login" method="post">
    <div class="container" style="width:75%; margin: 0 auto">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-heading">
                    <div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                    <div class="panel-title text-center">
                        <h3 class="title"><b>Entrar</b></h3>
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
                
                <div class="pwstrength_viewport_progress"></div>
                <button type="submit" name="go" class="btn  my-btn btn-block">Entrar</button>
                <a asp-controller="Home" asp-action="Login" class="btn btnSing">Não tenho conta</a>
            </div>
        </div>
    </div>
</form>