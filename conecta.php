<?php

	$conexao=mysqli_connect('localhost','root','','cadastro');
	mysqli_set_charset($conexao,'utf8');
	if($conexao->connect_error){
		die("falha ao realizar a conexão: ".$conexao->connect_error);
	}
	?>