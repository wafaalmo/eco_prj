<?php
try{

$DB= new PDO('mysql:host=localhost;dbname=vente','root','');
 
}catch(PDOException $e){
	echo "erreur :".$e->getMessage();
}
?>