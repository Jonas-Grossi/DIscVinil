<html>
<head>
<title>	cadastrando...</title>
<link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<?php
include("conecta.php");
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$pais=$_POST['pais'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = "INSERT INTO usuarios VALUES";
$sql .="('$nome','$sobrenome','$pais','$estado','$cidade','$email','$senha','DEFAULT')";
if($conexao->query($sql)=== TRUE){
	echo "<center><font color='yellow'><h1>Usuario cadastrado com sucesso!!!</h1></h1></center>";
	header("Refresh:5;url=index.html");
}else{
	echo"<center><font color='red'><h1>Erro ao cadastrar usuario!!!</h1></font></center>" .$sql . "<br>" .$conexao->error;
	header("Refresh:5;url=cadastro.php");
}	
$conexao->close();
?>
</body>
</html>