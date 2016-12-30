<?php
session_start();
require 'database.php';
try{
if (!empty($_POST['cp'])){
	if(strlen($_POST['cp'])==4 || strlen($_POST['cp'])==5 && 
	   is_numeric($_POST['cp']) && $_POST['cp'] > 0 && 
	   preg_match('/^\d+$/',$_POST['cp'])){
	$records=$conn->prepare('SELECT Code_Postal,Ville FROM ville_tb WHERE Code_Postal=:Code_Postal');
    $records->bindParam(':Code_Postal', $_POST['cp'],PDO::PARAM_INT);
    $records->execute();
    $results=$records->fetch(PDO::FETCH_ASSOC);
	
   if (count($results) > 0 && $_POST['cp']==$results['Code_Postal']){
	  $_SESSION["message"]=$results['Ville'];
	  header("Location:index.php");
	 
  }else{
	  $_SESSION["message"]="Ce code postal n'existe pas";
	  header("Location: index.php");
  }	
	
 }else {
	 $_SESSION["message"]="Les donn&eacute;es ne sont pas dans le bon format";
	 header("Location: index.php");
 }
}
else {
	 $_SESSION["message"]="ville";
	 header("Location: index.php");
}
 }catch(Exception $ex){
	 $_SESSION["message"]=null;
	 die("Erreur de connexion &agrave; la base de donn&eacute;es, Essayez &agrave; nouveau svp");
 }
?>