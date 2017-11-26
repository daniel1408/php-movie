
<div class="form-horizontal">
    <form asp-controller="Home" asp-action="Sing" method="post">
        <div class="container" style="width:75%; margin: 0 auto">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-heading">
                        <div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </div>
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
                                <input asp-for="FirstName" class="form-control" name="FirstName" id="FirstName"  placeholder="Digite seu nome"/>
                                <span asp-validation-for="FirstName" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="LastName" class="cols-sm-2 control-label">Sobrenome</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input asp-for="LastName" class="form-control" name="LastName" id="LastName"  placeholder="Digite seu sobrenome"/>
                                <span asp-validation-for="LastName" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Email" class="cols-sm-2 control-label">E-mail</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input asp-for="Email" class="form-control" name="Email" id="Email"  placeholder="Digite seu e-mail"/>
                                <span asp-validation-for="Email" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Username" class="cols-sm-2 control-label">Nome de usuário</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input asp-for="Username" class="form-control" name="Username" id="Username"  placeholder="Digite seu nome de usuário"/>
                                <span asp-validation-for="Username" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Password" class="cols-sm-2 control-label">Senha</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input asp-for="Password" class="form-control" name="Password" id="Password"  placeholder="Digite sua senha"/>
                                <span asp-validation-for="Password" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ConfirmPassword" class="cols-sm-2 control-label">Confirmar Senha</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input asp-for="ConfirmPassword" class="form-control" name="ConfirmPassword" id="ConfirmPassword"  placeholder="Digite novamente sua senha"/>
                                <span asp-validation-for="ConfirmPassword" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pwstrength_viewport_progress"></div>
                    <button type="submit" name="go" class="btn  my-btn btn-block">Registrar</button>
                </div>
            </div>
        </div>  
    </form>
</div>
