<?php
	include_once("seguranca.php"); 
	$conectar = mysql_connect("localhost","root","") or die ("Erro na conexão");
	mysql_select_db("elchamado") or die ("Base não encontrado!");
?>