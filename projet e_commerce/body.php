<?php 
session_start();
$ss = $_POST['cpd'];
$_SESSION['p'][] = $ss;
if (isset($_SESSION['count'])) {
	$_SESSION['count'] = $_SESSION['count'] + 1; 
}else{
	$_SESSION['count'] = 1; 
}

echo $_SESSION['count']." Produits";
?>