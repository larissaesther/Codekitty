<?php
	$servidor="localhost";
	$banco="dbsistemacontatods";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);		
?>