<?php
$host = "localhost";
$user="root";
$pass="";
$banco="cadastro";
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mssql_select_db($banco) or die(mysql_error());

?>
<?
	session_start();
	if(!isset($_SESSION["email"] || !isset($_SESSION["senha"])){
	header("Location:login.php");
	exit;
	
	}else{
		echo"<center>Você está logado!<center>";
	}
	?>
<html>
<head>
<title>Painel</title>
</head>
<body>
</body>
<a href="logout.php">Sair</a>
</html>