<?php
$server='localhost';
$database='bd_ville_fr';
try{
	$conn=new PDO("mysql:host=$server;dbname=$database");
}catch(PDOException $e)
{
	die ("Connection failed: ". $e->getMessage());
}
?>
