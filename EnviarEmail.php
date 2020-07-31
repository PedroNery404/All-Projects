<?php
	$con= mysqli_connect("localhost","root","");
	if(!$con){
		die("Erro:".mysqli_error($con));
	}
	echo "Conexao estabelecida com sucesso";
	if(! mysqli_select_db($con,"All Projects")){
		die("<br/>Erro:".mysqli_error($con));
	}
	echo "<br/>Banco selecionado com sucesso.";

	$to=$_POST["Email"];
	$subject="Trocar Senha no All Projects";
	$message="Testando 123";
	$header="MIME-Version: 1.0\n";
	$header.="Content-type: text/html;charset-iso-8859-1\n";
	$header.="From: $to\n";
	mail($to,$subject,$message,$header);
	echo "Mensagem Enviada com Sucesso";
?>