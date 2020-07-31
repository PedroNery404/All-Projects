 <?php
session_start();
//Conectando com a Base de Dados
$con= mysqli_connect("localhost","id12223186_root","abcdeFGHIJ-1234");
if(!$con){
	die("Erro:".mysqli_error($con));
}



//Selecionando Bando de Dados
if(! mysqli_select_db($con,"id12223186_allprojects")){
	die("<br/>Erro:".mysqli_error($con));
}



//Realizando pesquisa
$Senha1=$_GET["Senha"];
$b=$_SESSION["Email"];

$comando1 = "SELECT Senha FROM Usuario where Email='$b'";

$res = mysqli_query($con, $comando1);
	if($res){
		$comando = "UPDATE Usuario SET Senha='$Senha1' WHERE Email='$b';";
		$res = mysqli_query($con, $comando);
		echo "<script>window.location='Home(Logado).php';alert('Senha alterada com sucesso');</script>";
	}
mysqli_close($con);
?>