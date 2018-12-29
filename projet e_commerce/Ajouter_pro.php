<?php 
session_start();
include("function.php");
$result = categ();
?>
<html>
<head>
	<title>Produit</title>
	<meta charset="utf-8">
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
	<div class="container">

<?php 
		include("connexion.php");
	?>
	<div class="span9">		
	
	   <table class="table table-bordered">
		<tr><th> Ajouter un produit:  </th></tr>
		 <tr> 
		 <td>
			<form class="form-horizontal"  method="POST" action="cible_ajout_pro.php" enctype="multipart/form-data">
				<div class="control-group">
				  <label class="control-label" for="id">ID produit </label>
				  <div class="controls">
					<input type="text" id="id" name="id" placeholder="ID produit">
					 <span id="errid"></span> 
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="Libele">Libelé</label>
				  <div class="controls">
					<input type="text" id="Libele" name="libele" placeholder="Libelé">
					  <span id="errlab"></span> 
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="description">description</label>
				  <div class="controls">
					<input type="text" id="description" name="description" placeholder="description">
					  <span id="errdesc"></span> 
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="prix">prix</label>
				  <div class="controls">
					<input type="text" id="prix" name="prix" placeholder="prix">
					  <span id="errPrix"></span> 
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="qte">Quantité en stock</label>
				  <div class="controls">
					<input type="text" id="qte" name="qte" placeholder="qantité">
					  <span id="errqte"></span> 
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="image">image</label>
				  <div class="controls">
					<input type="file" id="image" name="image" placeholder="image">
				   <span id="errimg"></span> 
				  </div>

				</div><div class="control-group">
				  <label class="control-label" for="categorie">categorie</label>
				  <div class="controls">
				  	<select name="categorie">
				  		<?php  
				  			$sql="select label from categorie";
				  			$res=$DB->query($sql);
				  			while($val=$res->fetch(PDO::FETCH_OBJ)){
				  		?>
				  		<option ><?=$val->label ?></option>
				  		<?php } ?>
				  	</select>
					  <span id="errcat"></span> 
				  </div>
				</div>
				<div class="control-group">
				  <div class="controls">
					<button type="submit" class="btn">Valider</button>  <a href="produit.html" class="btn">Annuler</a>
				  </div>
				</div>
				
			</form>

		  </td>
		  </tr>
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
    <script type="text/javascript">

function testid(){
  if($("#id").val().length<3){
	  $(this).css({
      borderColor : 'red',
 		});
   	$("#errid").empty().append("Au mois 3 caractères").removeClass("hidden");
  }
 	else{
   	$(this).css({
	  	borderColor : 'green',
    });
   	$("#errid").empty().addClass("hidden");
  }
};

$("#id").on('focusout',testid);

function testlibele(){
  if($("#Libele").val().length<2){
    $(this).css({
      borderColor : 'red',
    });
    $("#errlab").empty().append("Au mois 2 caractères").removeClass("hidden");
  }
  else{
    $(this).css({
      borderColor : 'green',
    });
    $("#errlab").empty().addClass("hidden");
  }
};

$("#Libele").on('focusout',testlibele);

function testdesc(){
  if($("#description").val().length<6){
    $(this).css({
      borderColor : 'red',
    });
    $("#errdesc").empty().append("Au mois 6 caracteres").removeClass("hidden");
  }
  else{
    $(this).css({
      borderColor : 'green',
    });
    $("#errdesc").empty().addClass("hidden");
  }
};
$("#description").on('focusout',testdesc);

function f_prix(){
  if($("#prix").val().length<2){
    $(this).css({
      borderColor : 'red',
    });
    $("#errPrix").empty().append("Au mois 2 chifres").removeClass("hidden");
  }
  else{
    $(this).css({
      borderColor : 'green',
    });
    $("#errPrix").empty().addClass("hidden");
  }
};
$("#prix").on('focusout',f_prix);

function f_qte(){
  if($("#qte").val().length<1){
    $(this).css({
      borderColor : 'red',
    });
    $("#errqte").empty().append("Au mois 1 chifres").removeClass("hidden");
  }
  else{
    $(this).css({
      borderColor : 'green',
    });
    $("#errqte").empty().addClass("hidden");
  }
};
$("#qte").on('focusout',f_qte);

function f_image(){
  if($("#image").val().length==0){
    $("#errimg").css({
      textColor : 'red',
    });
    $("#errimg").empty().append("Inserer une image").removeClass("hidden");
  }
  else{
    $(this).css({
      borderColor : 'green',
    });
    $("#errimg").empty().addClass("hidden");
  }
};
$("#image").on('focusout',f_image);
</script>

</body>
</html>