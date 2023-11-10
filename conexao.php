<?php
	$servidor="localhost";
	$banco="dbsistemacontatods.sql";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);		
?>