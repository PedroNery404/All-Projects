<?php
    include_once("conexao.php");
    if (!isset($_GET["linguagem"])) {
        $procura="nada";
        $linguagem="";
    }
    else{
        $procura="linguagem";
        $linguagem=$_GET["linguagem"];
        $con= mysqli_connect("localhost","id12223186_root","abcdeFGHIJ-1234","id12223186_allprojects") or die(mysql_error());
        $comando="SELECT * FROM Projeto WHERE Linguagem='$linguagem'";
        $pesquisa=mysqli_query($con,$comando);
        $row=mysqli_num_rows($pesquisa);
        if ($row>0) {
            while ($linha=mysqli_fetch_array($pesquisa)) {
                $Codigo=$linha['Cod_projeto'];
                $Nome=$linha['Nome'];
                $Usuario=$linha['Usuario'];
                $Linguagem=$linha['Linguagem'];
                $Data=$linha['Data'];
                $Programa=$linha['Programa'];
                $Detalhes=$linha['Detalhes'];
            }
        }
    }
?>
<html>
<head>
    <title>Projetos Da Comunidade</title>

    <!-- CSS -->
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
        <div class="container-fluid"><a class="navbar-brand" href="index.php" style="color: rgba(255,255,255,0.9);background-image: url(&quot;assets/img/logo.png&quot;);width: 170px;height: 100px;margin: 5px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="background-color: rgba(255,255,255,0);background-image: url(&quot;assets/img/menu_hamburger.png&quot;);width: 50px;height: 50px;"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="padding-left: 0px;">
                <ul class="nav navbar-nav">

                    <li class="nav-item" role="presentation" style="margin-right: 0px;"><a class="nav-link" href="index.php" style="color: rgba(255,255,255,0.5);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;margin-right: 0px;">Home</a></li>

                    <li class="nav-item mx-3" role="presentation"><a class="nav-link active" href="ProjetosDaComunidade.php" style="color: rgba(255,255,255,0.9);font-family: 'Press Start 2P', cursive;font-size: 15px;padding-right: 8px;">Projetos</a></li>

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
        <br>
        <center>
    <!-- Projetos -->
    <p><h3>Projetos Da Comunidade</h3></p><br>
    <?php
    if (isset($_GET["linguagem"])) {
        echo "<h4>Feitos em $linguagem</h4>";
    }
    ?>
    <br>
    <?php
        //Receber o número da página
    
        $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);       
        $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
        
        //Setar a quantidade de itens por pagina
        $qnt_result_pg = 4;
        
        //calcular o inicio visualização
        $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
        if ($procura=="linguagem") {
            $result_usuarios = "SELECT * FROM Projeto where Linguagem='$linguagem' LIMIT $inicio, $qnt_result_pg";
            $link="ProjetosDaComunidade.php?linguagem=$linguagem"; 
            $result_pg = "SELECT COUNT(Cod_projeto) AS num_result FROM Projeto where Linguagem='$linguagem'";
        }
        else{
            $result_usuarios = "SELECT * FROM Projeto LIMIT $inicio, $qnt_result_pg";
            $link="ProjetosDaComunidade.php?";
            $result_pg = "SELECT COUNT(Cod_projeto) AS num_result FROM Projeto";
        }
        $resultado_usuarios = mysqli_query($conn, $result_usuarios);
        echo("<hr>");
        while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
            $projeto=$row_usuario['Cod_projeto'];
            echo "<a style='color:white;text-decoration: none;;font-size: 25px;' href='PaginaDoProjeto.php?projeto=$projeto'>Nome do Projeto: " . $row_usuario['Nome'] . "<br>";
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row_usuario['Imagem']).'"height="250px width="250px"/><br>';
            echo "Linguagem: " . $row_usuario['Linguagem'] . "<br>";
            echo "Usuario: " . $row_usuario['Usuario'] . "</a><br><hr>";
        }
        
        //Paginção - Somar a quantidade de usuários
        
        $resultado_pg = mysqli_query($conn, $result_pg);
        $row_pg = mysqli_fetch_assoc($resultado_pg);
        //echo $row_pg['num_result'];
        //Quantidade de pagina 
        $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
        
        //Limitar os link antes depois
        $max_links = 2;
        echo "<a style='color:black;' href='$link&pagina=1'>Primeira</a> ";
        
        for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
            if($pag_ant >= 1){
                echo "<a style='color:black;' href='$link&pagina=$pag_ant'>$pag_ant</a> ";
            }
        }
            
        echo "<a style='color:black;' href='#'>$pagina</a> ";
        
        for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
            if($pag_dep <= $quantidade_pg){
                echo "<a style='color:black;' href='$link&pagina=$pag_dep'>$pag_dep</a> ";
            }
        }
        
        echo "<a style='color:black;' href='$link&pagina=$quantidade_pg'>Ultima</a>";
        
        ?>
</center>
        <!-- Projetos Fim -->
        <br><br><br><br><br>
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