<?php
session_start();
$a=$_SESSION["Nome"];
?>
<html>
<head>
    <title>Criação de Projetos</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/PaginasLogadas.css">
    <link rel="stylesheet" type="text/css" href="css/PaginasDeslogadas.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Black+Ops+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Press+Start+2P">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSS Fim -->

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- JavaScript Fim -->

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

                    <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="CriaçaoDeProjetos.php" style="color: rgba(255,255,255,0.9);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;">Criação de Projetos</a></li>

                    <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="Perfil(Logado).php" style="color: rgba(255,255,255,0.5);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;"><?php echo "$a"; ?></a></li>

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
        <br>
    <!-- Criação de Projetos -->
    <center>
        <div id="conteudoFundoCinza">
            <form action="Projetos(bd).php" method="POST" enctype="multipart/form-data">
                <center>
                    <label><h1>Crie e Compartilhe seu Projeto</h1></label>
                    <br>
                    <input type="text" name="NomeProjeto" placeholder="Nome do Projeto" required>
                    <select name="Linguagem">
                        <option value="">Linguagem de Programação</option>
                        <option value="Python">Python</option>
                        <option value="Java">Java</option>
                        <option value="HTML">HTML</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="C++">C++</option>
                        <option value="Arduino">Arduino</option>
                    </select>
                    <br>
                    <br>
                    <label><h2>Digite o Codigo(Organizado em partes diferentes)</h2></label>
                    <br>
                    <textarea cols="150" rows="40" placeholder="Ex:
Programa Principal==>
Codigo
---------------------------
Classes==>
Codigo
---------------------------" name="Programa"></textarea>
                    <br>
                    <br>
                    <label>Selecione Imagens do Projeto</label>
                    <input multiple="" name="img[]" type="file" accept=".jpg,.png,.gif" max="5" />
                    <br>
                    <textarea cols="150" rows="5" placeholder="Digite aqui alguma informação adicional sobre o programa." name="Detalhes"></textarea>
                    <br>
                    <br>
                    <label><h2>Antes de Enviar</h2></label>
                    <br>
                    Revise seu código para ter certeza que tudo está funcionando e que nao tem nada de importante faltando.
                    <br>
                    Por favor, só envie fotos tiradas por você, fotos tiradas da internet não serão aceitas e você ainda corre o risco de ter seu cadastro removido do site.
                    <br>
                    As informações serão posteriormente formatadas pelo time do All Projects.<br>
                    <br>
                    <button name="submit" type="submit">Enviar Projeto</button>
                </center>

            </form>
            <br>
        </div>
    </center>
        <!-- Criação de Projetos Fim -->
        <br><br><br><br><br>
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
<script src="https://www.superanimes.org/js/configUser.min.js?v=10.9"></script>
<script src="https://www.superanimes.org/js/main.js?v=3.0"></script>
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
<!-- Neve Fim-->