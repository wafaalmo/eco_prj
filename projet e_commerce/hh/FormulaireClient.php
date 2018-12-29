<?php
include("function.php");

$nom="";
$prenom="";
$cin="";
$tel= "";
$email="";	

if(isset($_POST['nom']) and isset ($_POST['prenom']) and isset ($_POST['tel']) and isset ($_POST['email']) and isset ($_POST['cin']) and isset ($_POST['pass'])){


$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$cin=$_POST['cin'];
$tel= ($_POST['tel']);
$email=$_POST['email'];
$pass=$_POST['pass'];
//htmlspecialchars


if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#', $email)){


if (!preg_match('#^0[1-9]([\-. ]?[0-9]{2}){4}$#',$tel)){
	echo "<script language=\"javascript\">alert(\"Votre numéro de telephone est Invalide\");</script>";

}
else{
	

$connexion=connexion();

$requete="insert into client (id_client,nom,prenom,email,tel,password) values (?,?,?,?,?,?)";

$stm=$connexion->prepare($requete);
$stm->execute(array($cin,$nom,$prenom,$email,$tel,$pass));


}
}


else{

echo "<script language=\"javascript\">alert(\"Email Invalide\");</script>";
	}

}

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
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
    <a class="brand" href="index.html"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
	
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="special_offer.html">Specials Offer</a></li>
	 <li class=""><a href="normal.html">Delivery</a></li>
	 <li class=""><a href="contact.html">Contact</a></li>
	 <li class="">
	 <a href="LoginAdmin.php"  style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>

	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> ELECTRONICS [230]</a>
				<ul>
				<li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
				</ul>
			</li>
			<li class="subMenu"><a> CLOTHES [840] </a>
			<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>	
				<li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>												
			</ul>
			</li>
			<li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
				<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>	
				<li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>												
			</ul>
			</li>
			<li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
			<li><a href="products.html">SPORTS & LEISURE [58]</a></li>
			<li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
		</ul>
		<br/>

			
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    
	<h3> Valider le paiement de votre commande<a href="products.html" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continuer l'achat </a></h3>	
	<hr class="soft"/>
	<table class="table table-bordered">
		<tr><th>  </th></tr>
		 <tr> 
		 <td>
			<form class="form-horizontal " action="#" method="POST" id="formClient">
				<div class="control-group">
				  <label class="control-label" for="CIN">CIN *</label>
				  <div class="controls">
					<input type="text" id="cin" class="inp" name="cin" placeholder="Votre CIN" value=<?php echo $cin; ?>>
					<div id="erreur3" style="display:none;color:red">Incorrect: au moins 8 caractères. </div>
				  </div>
				</div>

				  <div class="control-group">
				  <label class="control-label" for="nom">Nom *</label>
				  <div class="controls">
					<input type="text" id="nom"  class="inp" name= "nom" placeholder="Votre Nom" value=<?php echo $nom; ?>>
					<div id="erreur1" style="display:none;color:red">Incorrect: au moins 3 caractères. </div>
				  </div>
				</div>

				  <div class="control-group">
				  <label class="control-label" for="prenom">Prenom *</label>
				  <div class="controls">
					<input type="text" id="prenom"  class="inp" name="prenom" placeholder="Votre Prenom" value=<?php echo $prenom; ?>>
					<div id="erreur2" style="display:none;color:red">Incorrect: au moins 3 caractères. </div>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="Tel">Tel *</label>
				  <div class="controls">
					<input type="text" id="tel" name="tel" class="inp" placeholder="Votre numero de Telephone" value=<?php echo $tel; ?>>
					<div id="erreur4" style="display:none;color:red">Incorrect: au moins 10 caractères. </div>
				  </div>
				  </div>
				 <div class="control-group">
				  <label class="control-label" for="email">E-mail *</label>
				  <div class="controls">
					<input type="text" id="email" name="email" class="inp" placeholder="user@exemple.com" value=<?php echo $email; ?>>
				  </div>
				  </div>

				  <div class="control-group">
				  <label class="control-label" for="carte">Type de la carte *</label>
				  <div class="controls">
				  <select name="carte">
				  <option name="carte">VISA</option>
				  <option name="carte">MasterCard</option>
				  <option name="carte">VPay</option>
				  <option name="carte">Maestro</option>
				  </select>
				  </div>
				  </div>

				  <div class="control-group">
				 <label class="control-label"  for="codeCarte">Code de la carte *</label>
				  <div class="controls">
					<input type="text" id="codeCarte" class="inp" name="codeCarte">
				  </div>
				</div>

				 <div class="control-group">
				 <label class="control-label" for="pass">Password *</label>
				  <div class="controls">
					<input type="password" id="pass" name='pass' class="inp" placeholder="Password">
				  </div>
				</div>
				<div class="control-group">
				  <div class="controls">
					<button type="submit" class="btn" id="valider">Valider</button> 
						<button type="reset" class="btn" id="reset">Annuler</button>
					 <div id="erreur" style="display:none;color:red"></div>
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
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<a href="login.html">YOUR ACCOUNT</a>
				<a href="login.html">PERSONAL INFORMATION</a> 
				<a href="login.html">ADDRESSES</a> 
				<a href="login.html">DISCOUNT</a>  
				<a href="login.html">ORDER HISTORY</a>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.html">CONTACT</a>  
				<a href="register.html">REGISTRATION</a>  
				<a href="legal_notice.html">LEGAL NOTICE</a>  
				<a href="tac.html">TERMS AND CONDITIONS</a> 
				<a href="faq.html">FAQ</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="special_offer.html">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
				<a href="#">SUPPLIERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; Bootshop</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>

    <script type="text/javascript">
    	


	  $(document).ready(function(){


	  	
//alert("heeeeeeeer");

	  	var nom = $('#nom');
		var prenom = $('#prenom');
	  	var cin = $('#cin');
	  	var email = $('#email');
	  	
	  	var tel = $('#tel');
	  	var carte = $('#carte');
	  	var codeCarte = $('#codeCarte');


  	  cin.keyup(function(){
    if($(this).val().length < 8){ // si la chaîne de caractères est inférieure à 8
        $(this).css({ // on rend le champ rouge
            borderColor : 'red',
               });
         $('#erreur3').css('display', 'block');    
     }
     else{
         $(this).css({ // si tout est bon, on le rend vert
	     borderColor : 'green',

	   
	 });
           $('#erreur3').css('display', 'none');  
     }
});
	  	  	  prenom.keyup(function(){
    if($(this).val().length < 3){ // si la chaîne de caractères est inférieure à 3
        $(this).css({ // on rend le champ rouge
            borderColor : 'red',
               });
         $('#erreur2').css('display', 'block');    
     }
     else{
         $(this).css({ // si tout est bon, on le rend vert
	     borderColor : 'green',

	   
	 });
           $('#erreur2').css('display', 'none');  
     }
});

	  	  nom.keyup(function(){
    if($(this).val().length < 3){ // si la chaîne de caractères est inférieure à 3
        $(this).css({ // on rend le champ rouge
            borderColor : 'red',
               });
         $('#erreur1').css('display', 'block');    
     }
     else{
         $(this).css({ // si tout est bon, on le rend vert
	     borderColor : 'green',

	   
	 });
           $('#erreur1').css('display', 'none');  
     }


     function verifier(champ){
        if(champ.val() == ""){ // si le champ est vide
  
    	    $('#erreur').css('display', 'block'); 
    	    $('#erreur').text('Les champs * :sont obligatoires !')
            champ.css({ // on rend le champ rouge
    	        borderColor : 'red',
    	       
    	    });

        }

    }
});





  	  tel.keyup(function(){
    if($(this).val().length < 10){ // si la chaîne de caractères est inférieure à 10
        $(this).css({ // on rend le champ rouge
            borderColor : 'red',
               });
         $('#erreur4').css('display', 'block');    
     }
     else{
         $(this).css({ // si tout est bon, on le rend vert
	     borderColor : 'green',

	   
	 });
           $('#erreur4').css('display', 'none');  
     }
});
function verifier(champ){
        if(champ.val() == ""){ // si le champ est vide
    	   
    	    $('#erreur').css('display', 'block'); 
    	    $('#erreur').text('Ces champs marqué par (*) sont obligatoires !')
            champ.css({ // on rend le champ rouge
    	        borderColor : 'red',
    	       
    	    });

        }
    }

  	    $('#valider').click(function(e){
        e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi
        verifier($('#nom'));
        verifier($('#cin'));
        verifier($('#tel'));
        verifier($('#email'));
        verifier($('#prenom'));
        verifier($('#carte'));
        verifier($('#codeCarte'));
        verifier($('#pass'));

        if($('#nom').val() != "" && $('#prenom').val() != "" && $('#cin').val() != "" && $('#tel').val() != "" && $('#email').val() != "" && $('#codeCarte').val() != "" && $('#pass').val() != ""){

$('#erreur').css('display', 'none'); 
$("#formClient").submit();

        }

     
});


  	    $('#reset').click(function(){

  	    	
        $('.inp').css({ // on remet le style des champs comme on l'avait défini dans le style CSS
            borderColor : '#ccc',
    	    color : '#555'
        });

       $('#erreur4').css('display', 'none'); 
       $('#erreur3').css('display', 'none'); 
         $('#erreur1').css('display', 'none'); 
           $('#erreur2').css('display', 'none');
             $('#erreur').css('display', 'none');
           // on prend soin de cacher le message d'erreur
        
    });

	 
})





    </script>



	
	<!-- Themes switcher section ============================================================================================= -->

</body>
</html>