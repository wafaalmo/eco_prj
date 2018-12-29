
<?php 
session_start();
include("function.php");
$result = categ();
?>
<html>
<head>
	<title>Produit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
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
    <script type="text/javascript" src="jquery-3.2.0.min.js"></script>
	<style type="text/css" id="enject">
	#p{
		height: 160px;
		width: 160px;
	}
	</style>
	<script type="text/javascript">
	$(document).ready(function(){

	$('.panier').click(function(){
		//alert("!!!!!!!!!!!!");
		$.ajax({
			type : 'POST',
			url:'body.php',
			data:{cpd:$('#cp').val()},
			dataType:'html', // OU JSON
			success:function(res){
				$('#pan').html(res);
				
			}
		})
	});
});

	</script>


	</script>
</head>
<body>
<?php 
include("connexion.php");
?>
<div id="header">

<div class="container">
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.html"><img src="themes/images/1.jpg" style="width: 193px; height:47px;" alt="Bootsshop"/></a>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="index.php">Accueil</a></li>
	
	  <li class=""><a href="consulter_cmd.php">Consulter Commandes</a></li>
	 <li class=""><a href="Ajouter_pro.php">Ajouter Produit</a></li>
	 <li class="">
	 <a href="LoginAdmin.php" style="padding-right:0"><span class="btn btn-large btn-success">Connexion</span></a>
	
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<div id="mainBody">
	
<?php 
		include("connexion.php");
	?>
	<div class="span9">		

	   <table class="table table-bordered">
		<tr><th> liste des comandes:  </th></tr>
		 <tr>
		 	<td> nom client</td>
		 	<td> date comande</td>
		 	<td> total produit </td>
		 	<td >consulter les produits</td>
		 </tr>
		 <?php 

$sql="select ce.nom ,c.date_cmd,avg(p.prix), l.id_cmd  from client ce , commande c , ligne_cmd l, produit p where c.id_client=ce.id_client and c.id_cmd=l.id_cmd and l.id_produit=p.id_produit group by  ce.nom";

$res=$DB->query($sql);
$rs=$res->fetchAll(PDO::FETCH_NUM);

foreach($rs as $lig){
	
	?>
		<tr>
		 	<td> <?= $lig[0]; ?></td>
		 	<td> <?= $lig[1]; ?></td>
		 	<td> <?= $lig[2]; ?> </td>
		 	<?php 
		 	 echo '<td><a href="consulter_prd.php?tab='.$lig[3].'"> Consulter </a></td>';?>
			  
		 </tr>
	<?php }
	 ?>
	</table>	
	      </div>
		</div>
	  </div>

	</div>
<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
</body>
</html>