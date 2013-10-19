<?php 

	$con = null;

	try { 
		$opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'); 
		
		$con = new PDO("mysql:host=localhost; dbname=clubedam_newsletter;", "clubedam_user", "clubcampeao2013", $opcoes); 
		
	} catch (Exception $e) { 

		echo 'Erro: '.$e->getMessage(); return null; 

	} 

?>

<!--?php

//Conexão ao Banco de Dados

$conect = mysql_connect("localhost", "clubedam_user", "clubcampeao2013");
if (!$conect) die ("<h1>Falha na coneco com o Banco de Dados!</h1>");
$cdm_db = mysql_select_db("clubedam_newsletter");

//Força query com acentuação padrão UTF-8
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

?-->