<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">

        <div style=" width: 10%; position:relative; float:left">

            <a href="home.php" id="iconMenu" style="margin-left:30%">
                <img src="http://www.piratebrands.com/images/menu.png" width="50px">
            </a>
        </div>

        <div class="navbar-collapse collapse" style=" width:80%; position:relative;float:right"> 
            <div class="campo-busca" style="margin-left: 23%">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input class="form-control mr-sm-2 " type="text" name="parametro" placeholder="Qual filme deseja encontrar hoje?" aria-label="Search">
                </form>
            </div>

            <ul class="nav navbar-nav" style="position:relative; float:right;">
                    <li>
                        <a href="logout.php">
                            Logout
                        </a>
                    </li>
                    <?php
                        if(!isset($_SESSION['user']) && !isset($_SESSION['pwd'])){
                    ?>
                    <li>
                        <a href="login.php" class="btnLogin">                        
                            Entrar
                        </a>
                    </li>
                    <li>
                        <a href="sign.php" class="btnSing">
                            Criar Conta
                        </a>
                    </li>
                    <?php
                        }
                    ?>
            </ul>
        </div>
    </div>
</nav>