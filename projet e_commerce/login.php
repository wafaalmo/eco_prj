<?php 
session_start();
unset($_SESSION['count']);
unset($_SESSION['p']);
session_destroy();
//echo $_SESSION['count'];
header("Location: product_summary.php");
?>