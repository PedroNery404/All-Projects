<?php
session_start();
$a=$_SESSION["Nome"];
$b=$_SESSION["Email"];
$c=$_SESSION["Senha"];

?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mudar Informações</title>
    <link rel="stylesheet" type="text/css" href="css/PaginasLogadas.css">
    <link rel="stylesheet" type="text/css" href="css/PaginasDeslogadas.css">
    <link rel="stylesheet" href="assets1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Press+Start+2P">
    <link rel="stylesheet" href="assets1/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets1/css/Dark-NavBar-1.css">
    <link rel="stylesheet" href="assets1/css/Dark-NavBar-2.css">
    <link rel="stylesheet" href="assets1/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets1/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets1/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets1/css/styles.css">
</head>

<body style="background-color: gray;">
    <!-- NavBar -->
    <nav class="navbar navbar-light navbar-expand-md text-right" style="background-color: #000000;margin: 0px;">
        <div class="container-fluid"><a class="navbar-brand" href="Home(Logado).php" style="color: rgba(255,255,255,0.9);background-image: url(&quot;assets/img/logo.png&quot;);width: 170px;height: 100px;margin: 5px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="background-color: rgba(255,255,255,0);background-image: url(&quot;assets/img/menu_hamburger.png&quot;);width: 50px;height: 50px;"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="padding-left: 0px;">
                <ul class="nav navbar-nav">

                    <li class="nav-item" role="presentation" style="margin-right: 0px;"><a class="nav-link active" href="Home(Logado).php" style="color: rgba(255,255,255,0.5);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;margin-right: 0px;">Home</a></li>

                    <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="ProjetosDaComunidade(Logado).php" style="color: rgba(255,255,255,0.5);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;">Projetos</a></li>

                    <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="CriaçaoDeProjetos.php" style="color: rgba(255,255,255,0.5);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;">Criação de Projetos</a></li>

                    <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="Perfil(Logado).php" style="color: rgba(255,255,255,0.5);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;"><?php echo "$a"; ?></a></li>

                    <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="MudarInfo.php" style="color: rgba(255,255,255,0.9);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;">Mudar Informações</a></li>

                    <div class="itens snowflakes_btn" title="Ativar ou Desaticar Neve">
                    <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="" style="color: rgba(255,255,255,0.5);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;">Neve</a></li>
                    </div>

                    <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="index.php
                        " style="color: rgba(255,255,255,0.5);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;">Sair</a></li>

                </ul>
        </div>
        </div>
    </nav>
    <!-- NavBar Fim -->
    <div class="login-dark" style="background-image: url(&quot;none&quot;);height: 650px;background-color: gray;">
        <form method="GET" action="alterar_senha(bd).php">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>

            <div class="form-group"><input class="form-control" type="password" name="Senha" id="Senha"placeholder="Nova Senha"></div>
            <div class="form-group"><input class="form-control" type="password" name="ConfirmarSenha" id="ConfirmarSenha" placeholder="Confirmar Senha"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Alterar Senha</button></div>

        </form>
        
    </div>
    <!-- Footer -->
    <div class="footer-dark" style="margin-top: 15px;">
        <footer style="padding-left: 5%;padding-right: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3 style="font-family: Audiowide, cursive;color: #2D8CEB;">Linguagens</h3>
                        <ul>
                            <li><a href="ProjetosDaComunidade(Logado).php?linguagem=Java" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Java</a></li>
                            <li><a href="ProjetosDaComunidade(Logado).php?linguagem=Arduino" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Arduino</a></li>
                            <li><a href="#" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">    
                                </a></li>
                            <li><a href="ProjetosDaComunidade(Logado).php?linguagem=Python" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Python</a></li>
                            <li><a href="ProjetosDaComunidade(Logado).php?linguagem=C" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">C</a></li>
                            <li><a href="ProjetosDaComunidade(Logado).php?linguagem=JavaScript" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Java Script</a></li>
                            <li><a href="ProjetosDaComunidade(Logado).php?linguagem=PHP" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">PHP</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3 style="font-family: Audiowide, cursive;color: #2D8CEB;">Links Úteis</h3>
                        <ul>
                            <li><a href="Home(Logado).php" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Home</a></li>
                            <li style="font-family: Audiowide, cursive;"><a href="ProjetosDaComunidade(Logado).php" style="color: #72A603;opacity: 1;">Projetos</a></li>
                            <li><a href="CriaçaoDeProjetos.php" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Criação de Projetos</a></li>
                            <li><a href="Perfil(Logado).php" style="opacity: 1;color: #72A603;font-family: Audiowide, cursive;">Perfil</a></li>
                            <li><a href="index.php" style="opacity: 1;color: #72A603;font-family: Audiowide, cursive;">Sair</a></li>
                        </ul>   
                    </div>
                    <div class="col-md-6 item text">
                        <h3 style="font-family: Audiowide, cursive;color: #2D8CEB;">All Projects</h3>
                        <p style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Bem Vindo ao All Projects.Esse site serve para a criação,compartilhamento e visualização de projetos.</p>
                    </div>
                </div>
                <p class="copyright" style="color: #2D8CEB;opacity: 1;font-family: Audiowide, cursive;">AllProjects © 2019</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Footer Fim-->
</body>

</html>