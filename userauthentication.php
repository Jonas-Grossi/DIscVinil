<?php
include("conecta.php");
?>
<html>
<head>

<title>Autenticando Usuario</title>


<script type="text/javascript">


function loginsuccessfully(){
	window.location="index.html";
}

function loginfailed(){
	window.location.href="login.php";
}

</head>
<body>.
<?php>
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = mysql_query ("SELECT * FROM usuarios WHERE email = '$email' and senha='$senha'") or die(mysql_error());
$row = mysql_num_rows($sql);
if($row > 0){
	 session_start();
	 $_SESSION['email']=$_POST['email'];
	 $_SESSION['senha']=$_POST['senha'];
	 echo "<center></h1>Você foi autenticado com sucesso!!  Aguarde instante.</h1></center>";
	console.log(loginsuccessfully());
	}else{
		echo"<center><h1>Nome de usuario ou senha Invalidos!!!</h1></center>";
		console.log(loginfailed());
		
	}

?>
</body>
</html>