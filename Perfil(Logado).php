<?php
session_start();
$a=$_SESSION["Nome"];
$b=$_SESSION["Email"];

    $usuario=$a;
    $con= mysqli_connect("localhost","id12223186_root","abcdeFGHIJ-1234","id12223186_allprojects") or die(mysql_error());
    $comando="SELECT * FROM Usuario WHERE Nome='$usuario'";
    $pesquisa=mysqli_query($con,$comando);
    $row=mysqli_num_rows($pesquisa);
    if ($row>0) {
        while ($linha=mysqli_fetch_array($pesquisa)) {
            $Codigo=$linha['Cod_usuario'];
            $Nome=$linha['Nome'];
            $Email=$linha['Email'];
        }
    }
    else {
        echo("Ainda nao existe conteudo");
        exit();
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo "$a"; ?></title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/PaginasLogadas.css">
    <link rel="stylesheet" type="text/css" href="css/PaginasDeslogadas.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Press+Start+2P">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-1.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-2.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- CSS Fim -->
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

                    <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="Perfil(Logado).php" style="color: rgba(255,255,255,0.9);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;"><?php echo "$a"; ?></a></li>

                    <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="MudarInfo.php" style="color: rgba(255,255,255,0.5);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;">Mudar Informações</a></li>

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

    <!-- Perfil -->
        <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body text-center"><img src="Imagens/perfil.jpeg" style="width: 200px;height: 200px;">
                        <h4 class="card-title">Usuário:<?php echo "$a"; ?></h4>
                    </div>
                </div>
            </div>
        </div>
<br>
<center>
    <hr>
        <?php 
            $comando="SELECT * FROM Projeto WHERE Usuario=(SELECT Nome from Usuario where Nome='$Nome')";
            $pesquisa=mysqli_query($con,$comando);
            $row=mysqli_num_rows($pesquisa);
            if ($row>0) {
                while ($linha=mysqli_fetch_array($pesquisa)) {
                    $projeto=$linha['Cod_projeto'];
                    echo "<a style='color:white;text-decoration: none;;font-size: 25px;' href='PaginaDoProjeto(Logado).php?projeto=$projeto'>Nome do Projeto: " . $linha['Nome'] . "<br>";
                    echo '<img src="data:image/jpeg;base64,'.base64_encode($linha['Imagem']).'"height="250px width="250px"/><br>';
                    echo "Linguagem: " . $linha['Linguagem'] . "<br>";
                    echo "Usuario: " . $linha['Usuario'] . "</a><br><hr>";
            }
        }
            else {
                echo("Esse usuario ainda nao fez um projeto");
            }
        ?>
</center>

    </div>
<!-- Perfil Fim -->

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
<!-- Neve -->
<script src="https://www.superanimes.org/js/jquery.min.js?v=1.0"></script>
<script src="https://www.superanimes.org/js/config.min.js?v=10.9"></script>
<script src="https://www.superanimes.org/js/lazyLoad.min.js"></script>
<script src="https://unpkg.com/magic-snowflakes@4.1.3/dist/snowflakes.js"></script>
<script>
  $('.snowflakes_btn').click(function(){
    var snowflakes = checkLStoregeOrCookie("snowflakes")
    if(snowflakes === null || snowflakes !== "true"){
      createStoregeOrCookie("snowflakes", 'true')
    } else {
      createStoregeOrCookie("snowflakes", 'false')
    }
    location.reload();
  });

  var snowflakes = checkLStoregeOrCookie("snowflakes")
  if(snowflakes === null || snowflakes !== "true"){
    Snowflakes({
      color: 'white',
      speed: 1,
      zIndex: 5,
    });
  }
</script>
<!-- Neve Fim -->