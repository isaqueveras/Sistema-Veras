<?php
	include_once("seguranca.php"); 
	$conectar = mysql_connect("localhost","root","") or die ("Erro na conexão");
	mysql_select_db("baco_de_dados") or die ("Base não encontrado!");
?>
