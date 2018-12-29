<?php
include("Ajouter_pro.php");

try{
if(!empty($_POST['id']) && !empty($_POST['libele']) && !empty($_POST['description']) 
	&& !empty($_POST['prix']) && !empty($_POST['qte']) ){
$id_L=$_POST['id'];
$lib=$_POST['libele'];
$desc=$_POST['description'];
 
$qte=$_POST['qte'];

$image= "images/".$_FILES['image']['name'];
$image_tmp= $_FILES['image']['tmp_name'];
$cat=$_POST['categorie'];

if(!preg_match("#^[0-9]+$#", $_POST['prix'])){
echo"<script language=\"javaScript\" > alert(\"prix invalid!!!\"); </script>";

}
else{


//$nom_destination = 'images/'.$image;// /jpg, pdf selon le fichier sélectioné
move_uploaded_file($image_tmp, $image);


//recuperation de id de categorie
$sql_id="select id_categ from categorie where label='".$cat."'";
$res=$DB->query($sql_id);
$rs= $res->fetchAll(PDO::FETCH_NUM);
$rr = $rs[0][0];
$sql="insert into produit values(?,?,?,?,?,?,?,?)";
$res=$DB->prepare($sql);
$res->execute(array($id_L,$lib,$desc,$prix,$qte,$image,$rr,0));
	echo"<script language=\"javaScript\" > alert(\"produit bien ajouter\"); </script>";
}
}
else{
	//header('location:Ajouter_pro.php');
}
}catch(PDPException $e){
	echo "erreur de requete ";
}



?>
