<?php 
session_start();
include("function.php");
$result = categ();
//$_SESSION['count'] = 0;
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
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png"> </script>
    <script type="text/javascript" src="jquery-3.2.0.min.js"></script>
	<style type="text/css" id="enject">
	#p{
		height: 160px;
		width: 160px;
	}
	</style>
	<script type="text/javascript">
	$(document).ready(function(){
$(".cp").hide();
	$('button.btn').click(function(){
		//alert("!!!!!!!!!!!!");

		$.ajax({
			type :'POST',
			url:'body.php',
			data:{cpd:$(this).find('.cp').val()},
			dataType:'html', // OU JSON
			success:function(res){
				$('#pan').html(res);
				
			}
		})
	});
});

	</script>


	
</head>
<body>
<?php 
include("head.php");
?>

<div id="mainBody">
	<div class="container">
<div class="row"><div id="sidebar" class="span3"><div class="well well-small"><a id="myCart" href="product_summary.php"><img src="themes/images/ico-cart.png" alt="cart"><span id="pan"><?php if(isset($_SESSION['count'])){echo $_SESSION['count']." Produits";}else{
	echo "Aucun Produit";
} ?></span></a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> ELECTRONICS</a>
				<ul>
<?php
			foreach ($result as $row) {
		echo "<li><a class=\"active\" href=\"?c=".$row[0]."\"><i class=\"icon-chevron-right\"></i>".$row[1]."(".$row[2].") </a></li>" ;
						}

					?>
				
				</ul>
			</li>
			
		</ul>
	

	</div>
<?php 
		//include("body.php");
	?>
	<div class="span9">		
	<h4>   Latest Products </h4>
			  <ul class="thumbnails">
			  	<?php
					if (isset($_GET['c'])) {
						$resultat = aff_produit($_GET['c']);
			}else{
						$resultat = aff_produit(4);
					}
					foreach ($resultat as $row) {
	echo "<li class=\"span3\">
				  <div class=\"thumbnail\">
					<a  href=\"product_details.html\"><img id=\"p\"src=".htmlspecialchars($row[5])." alt=\"\"/></a>
					<div class=\"caption\">
					  <h5>".$row[1]."</h5>
					  <p> 
						".$row[2].
					  "</p>
					 
<h4 style=\"text-align:center\"> <button class=\"btn\">add<input class=\"cp\" type=\"text\" value=".$row[0]." hidden> <i class=\"icon-shopping-cart\"></i></button> <a class=\"btn btn-primary\" href=\"#\">".$row[3]."</a></h4>
					</div>
				  </div>
				</li>";
}
		
				
?>
				
			  </ul>	
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