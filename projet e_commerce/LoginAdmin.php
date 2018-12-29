<?php 
include("function.php");


if(isset ($_POST['login']) and isset ($_POST['passe']) ){
$login=$_POST['login'];
$pass=md5($_POST['passe']);

$resultat=authentification($login,$pass);
$msg="";
if($resultat==1) { header("Location: Ajouter_pro.php");}
else $msg="<span style=\"color:red\">Erreur d'authentification !!!</span>";

}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Authentification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<?php include("head.php"); ?>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<!-- Sidebar end=============================================== -->
	<div class="span9">
    
<h3> Authentification </h3>	
	<hr class="soft"/>
	<table class="table table-bordered">
		<tr><th>  </th></tr>
		 <tr> 
		 <td>
			<form class="form-horizontal" action="#" method="POST">
				<div class="control-group">
				  <label class="control-label" for="inputUsername">Login</label>
				  <div class="controls">
					<input type="text" id="inputUsername" name="login" placeholder="Votre Login">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="inputPassword1">Mot de passe</label>
				  <div class="controls">
					<input type="password" id="inputPassword1" name="passe" placeholder="Votre mot de passe">
				  </div>
				</div>
				<div class="control-group">
				  <div class="controls">
					<button type="submit" class="btn">Se connecter </button> <br/><br/>
				    <?php
				    if(isset ($_POST['login']) and isset ($_POST['passe']) ){
				    echo $msg;}
				    ?>
				  </div>
				</div>
				<div class="control-group">
					
				</div>
			</form>
		  </td>
		  </tr>
	</table>		
			

		

	
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->

<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>

<span id="themesBtn"></span>
</body>
</html>