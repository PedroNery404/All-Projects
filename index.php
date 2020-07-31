<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/PaginasDeslogadas.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Black+Ops+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Press+Start+2P">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- CSS Fim -->

</head>
<body style="background-color: gray;">
    <!-- NavBar -->
    <nav class="navbar navbar-light navbar-expand-md text-right" style="background-color: #000000;margin: 0px;">
        <div class="container-fluid"><a class="navbar-brand" href="index.php" style="color: rgba(255,255,255,0.9);background-image: url(&quot;assets/img/logo.png&quot;);width: 170px;height: 100px;margin: 5px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="background-color: rgba(255,255,255,0);background-image: url(&quot;assets/img/menu_hamburger.png&quot;);width: 50px;height: 50px;"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="padding-left: 0px;">
                <ul class="nav navbar-nav">

                    <li class="nav-item" role="presentation" style="margin-right: 0px;"><a class="nav-link active" href="index.php" style="color: rgba(255,255,255,0.9);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;margin-right: 0px;">Home</a></li>

                    <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="ProjetosDaComunidade.php" style="color: rgba(255,255,255,0.5);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;">Projetos</a></li>

                    <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="Login.php" style="color: rgba(255,255,255,0.5);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;">Login</a></li>

                    <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="Cadastro.php" style="color: rgba(255,255,255,0.5);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;">Cadastro</a></li>

                    <div class="itens snowflakes_btn" title="Ativar ou Desaticar Neve">
                    <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="" style="color: rgba(255,255,255,0.5);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;">Neve</a></li>
                    </div>
                </ul>
        </div>
        </div>
    </nav>
    <!-- NavBar Fim -->
    <!-- Carousel -->
    <div class="container">
        <div class="row">
            <div class="col" style="padding: 15px;">
                <div class="carousel slide" data-ride="carousel" id="carousel-1" style="margin: 35px;">
                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active" style="background-image: url(&quot;assets/img/project1.jpg&quot;);"><a href="ProjetosDaComunidade.php?linguagem=Java"><img class="w-100 d-block" src="assets/img/java.jpg" alt="Slide Image"></a></div>

                        <div class="carousel-item"><a href="ProjetosDaComunidade.php?linguagem=Python"><img class="w-100 d-block" src="Imagens/python.jpg" alt="Slide Image"></a></div>

                        <div class="carousel-item"><a href="ProjetosDaComunidade.php?linguagem=Arduino"><img class="w-100 d-block" src="Imagens/arduino.jpg" alt="Slide Image"></a></div>

                        <div class="carousel-item"><a href="ProjetosDaComunidade.php?linguagem=C"><img class="w-100 d-block" src="Imagens/c2.jpg" alt="Slide Image"></a></div>

                        <div class="carousel-item"><a href="ProjetosDaComunidade.php?linguagem=JavaScript"><img class="w-100 d-block" src="Imagens/js.jpg" alt="Slide Image"></a></div>

                        <div class="carousel-item"><a href="ProjetosDaComunidade.php?linguagem=PHP"><img class="w-100 d-block" src="assets/img/php.jpg" alt="Slide Image" style="padding: 0px;"></a></div>
                    </div>

                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                            data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>

                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                        <li data-target="#carousel-1" data-slide-to="3"></li>
                        <li data-target="#carousel-1" data-slide-to="4"></li>
                        <li data-target="#carousel-1" data-slide-to="5"></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- Carousel Fim -->
        <!-- Alguns Projetos -->
        <center>
        <div class="row">
            <div class="col" style="padding: 0px 15px;">
                <div class="card-group" style="margin: 35px;">
                    <a href="PaginaDoProjeto.php?projeto=12">
                    <div class="card" style="background-color: #2D8CEB;margin-right: 15px;">
                        <img style="background-image: url(&quot;assets/img/project1.jpg&quot;);width: 334px;height: 200px;background-color: #2D8CEB;" src="assets/img/fibonacci.png">
                        <div class="card-body" style="background-color: black;">
                            <h4 class="card-title">
Fibonacci</h4>
                            <br>
                            <button class="btn btn-primary" type="button" style="background-color: rgb(255,255,255);color: rgb(0,0,0);height: 40px;">Ver Projeto</button></div>
                    </div>
                </a>
                    <a href="PaginaDoProjeto.php?projeto=1">
                    <div class="card" style="background-color: #2D8CEB;"><img style="background-image: url(&quot;assets/img/project2.jpg&quot;);width: 333px;height: 200px;background-color: #2D8CEB;" src="assets/img/garra.jpg">
                        <div class="card-body" style="background-color: black;">
                            <h4 class="card-title">Braço Robótico</h4>
                            <br>
                            <button class="btn btn-primary" type="button" style="color: rgb(0,0,0);background-color: rgb(255,255,255);height: 40px;">Ver Projeto</button></div>
                    </div>
                    </a>
                    <a href="PaginaDoProjeto.php?projeto=19">
                    <div class="card" style="background-color: #2D8CEB;margin-left: 15px;"><img style="background-image: url(&quot;assets/img/project3.jpg&quot;);width: 333px;height: 200px;background-color: #2D8CEB;" src="assets/img/caranga.jpg">
                        <div class="card-body" style="background-color: black;">
                            <h4 class="card-title">Caranga Ligeira</h4>
                            <br>
                            <button class="btn btn-primary" type="button" style="color: rgb(0,0,0);background-color: rgb(255,255,255);height: 40px;">Ver Projeto</button></div>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div>
</center>
    <!-- Alguns Projetos Fim -->
    <!-- Footer -->
    <div class="footer-dark" style="margin-top: 15px;">
        <footer style="padding-left: 5%;padding-right: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3 style="font-family: Audiowide, cursive;color: #2D8CEB;">Linguagens</h3>
                        <ul>
                            <li><a href="ProjetosDaComunidade.php?linguagem=Java" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Java</a></li>
                            <li><a href="ProjetosDaComunidade.php?linguagem=Arduino" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Arduino</a></li>
                            <li><a href="#" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">    
                                </a></li>
                            <li><a href="ProjetosDaComunidade.php?linguagem=Python" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Python</a></li>
                            <li><a href="ProjetosDaComunidade.php?linguagem=C" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">C</a></li>
                            <li><a href="ProjetosDaComunidade.php?linguagem=JavaScript" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Java Script</a></li>
                            <li><a href="ProjetosDaComunidade.php?linguagem=PHP" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">PHP</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3 style="font-family: Audiowide, cursive;color: #2D8CEB;">Links Úteis</h3>
                        <ul>
                            <li><a href="index.php" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Home</a></li>
                            <li style="font-family: Audiowide, cursive;"><a href="ProjetosDaComunidade.php" style="color: #72A603;opacity: 1;">Projetos</a></li>
                            <li><a href="Login.php" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Login</a></li>
                            <li><a href="Cadastro.php" style="opacity: 1;color: #72A603;font-family: Audiowide, cursive;">Cadastro</a></li>
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
