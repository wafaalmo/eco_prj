<?php 
function connexion()
{
	
try{
	$c = new pdo("mysql:host=localhost;dbname=vente;","root","");
	return $c;
}catch(PDException $e){
	echo "Erreur de connection avec la base de données".$e.getMessage();
}
}

function categ(){
	$c = connexion();
	$req = "SELECT c.id_categ,label,count(*) FROM categorie c,produit p where c.id_categ = p.id_categ group by c.id_categ";
	$stm = $c->query($req);
	$res = $stm->fetchAll(PDO::FETCH_NUM);
	return $res;
}

function aff_produit($ctg){
	$c = connexion();
	$req= 'SELECT * FROM produit p,categorie c where c.id_categ = p.id_categ and c.id_categ = "'.$ctg.'"';
	$stm = $c->query($req);
	$result = $stm->fetchAll(PDO::FETCH_NUM);
	return $result;
}

function authentification($login,$pass){
	$c = connexion();
	$req = "SELECT * FROM admin where pseudo=? and password=?";
	$stm = $c->prepare($req);
	$stm->execute(array($login,$pass));
	$cp=0;
	while($stm->fetchAll(PDO::FETCH_NUM)){$cp++;}
	if($cp==0){return 0;}
	else return 1;
}




?>