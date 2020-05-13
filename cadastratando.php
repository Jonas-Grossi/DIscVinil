<html>
<head>
<title>	cadastrando...</title>
</head>
<body>
<?php
include("conecta.php");
$recnome=$_GET["nome"];
$recsobrenome=$_GET["sobrenome"];
$recpais=$_GET["pais"];
$recestado=$_GET["estado"];
$reccidade=$_GET["cidade"];
$recemail=$_GET["email"];
$recsenha=$_GET["senha"];
mysqli_query($conexao,"insert into usuarios(nome,sobrenome,pais,estado,cidade,email,senha) values('recnome','recsobrenome','recpais','recestado','reccidade','recemail','recsenha')");
header("location:index.html");

?>

</body>
</html>