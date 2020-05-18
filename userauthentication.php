
<html>
<head>


<title>Autenticando Usuario</title>
<link rel="stylesheet" href="_css/estilo.css">


</head>

<body>
<header id="autenticacao">
<?php
include("conecta.php");
		
		$email = $_POST['email'];
		$senha = $_POST['senha'];
$conexao=mysqli_connect('localhost','root','','cadastro');		
$sql = mysqli_query($conexao,"SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'");

 if($email == "" || $email == null ) {
    echo "<center><font color='red'><h1>O campo email devem ser preeenchido!!!</h1></font></center>";
			header("Refresh:5;url=index.php");
			die();
			}
			
      else if($senha == "" || $senha == null){
			echo "<center><font color='red'><h1>O campo senha deve ser preenchido!!!</h1></font></center>";
			header("Refresh:5;url=index.php");
			die();
	  }
	  
      $row = mysqli_num_rows($sql);
      
	   if($row > 0) {
		   session_start();
         $_SESSION['email']=$_POST['email'];
		 $_SESSION['senha']=$_POST['senha'];
         
        echo "<center><font color='yellow'><h1>Voce foi autenticado com sucesso!!!</h1></font></center>";
		echo "<center><h1><font color='white'>redirecionando....</h1></font></center>";
		header("Refresh:5;url=home.html");
		
      }else {
		  
			echo "<center><font color='red'><h1>Usuario ou senha invalidos!!!</h1></font></center>";
			header("Refresh:5;url=index.php");
		 
      }
   

?>
</header>
</body>
</html>