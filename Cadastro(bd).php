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
$Cod_usuario="0";
$Nome=$_POST["Nome"];
$Email=$_POST["Email"];
$Senha=$_POST["Senha"];

$sql1 = mysqli_query($con, "SELECT * FROM Usuario WHERE Nome = '{$Nome}'") or print mysql_error();

$sql2 = mysqli_query($con, "SELECT * FROM Usuario WHERE  Email = '{$Email}'") or print mysql_error();

if(mysqli_num_rows($sql1)==0) {
   if(mysqli_num_rows($sql2)==0){
   	$comando = "Insert into Usuario(Cod_usuario,Nome,Email,Senha)";
	$comando .="VALUES ('$Cod_usuario','$Nome','$Email','$Senha')";
	$res = mysqli_query($con, $comando);
    header('location:Login.php');
   }
   else{
   	echo "<script>window.location='Cadastro.php';alert('Email inválido!!');</script>";
   }
}
else{
	echo "<script>window.location='Cadastro.php';alert('Nome inválido!');</script>";
}
mysqli_close($con);


?>