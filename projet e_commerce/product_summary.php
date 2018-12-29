<?php 
session_start();
include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>panier</title>
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
	 <script type="text/javascript" src="jquery-3.2.0.min.js"></script>
	 <script type="text/javascript">
$(document).ready(function(){
	$(".i").hide();
	/*$('.btn-danger').click(function(){
		//alert("!!!!!!!!!!!!");
		$.ajax({
			type : 'POST',
			url:'tr_supp.php',
			data:{i:$('.i').val()},
			dataType:'html', // OU JSON
			success:function(res){
				$('#s').html(res);
			}
		})
	});*/
});

	 </script>
  </head>
<body> 
<?php include("head.php"); ?>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	
<!-- Sidebar end=============================================== -->
	<div class="span9">
  
	<h3>  Produits Choisies [ <small id="s"><?php if(isset($_SESSION['count'])) {
		echo $_SESSION['count']." Produit(s)" ;
	}else{
		echo "Aucun Produit";
	}?> </small>]<a href="produit.php" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
	<hr class="soft"/>
		
			
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Produits</th>
                  <th>Nom</th>
                  <th>Déscription</th>
                  <th>Suppression</th>
				  <th>Prix</th>
				  <th>Total</th>
				</tr>
              </thead>
             <tbody>
              <?php 
$total = 0;
if (isset($_SESSION['p']) && count($_SESSION['p'])!=0 ) {
	  for ($i = 0;$i<count($_SESSION['p']);$i++) { 
               	if ($_SESSION['p'][$i]!= "") {
               		$res = p_p($_SESSION['p'][$i]);
             
               	?>		
						<tr>
                		
                		<?php	foreach ($res as $row) {
                					$total += ($row[3]+$row[7]);
                			?>	
         <td> <img width=60 src="<?php echo $row[5];?>">
                  </td>
                <td><?php echo $row[1];?></td>
                  <td><?php echo $row[2];?></td>
				  <td><input type="text" value="<?php echo $i;?>" class="i">
					<div class="input-append"><a class="btn btn-danger" href="tr_supp.php?i=<?php echo $i;?>" ><i class="icon-remove icon-white"></i></a></div> 
				  </td>
                  <td><?php echo $row[3];?></td>
                  <td><?php echo $row[3]+$row[7];
                  		
                  ?></td>
                		<?php } ?>	
						</tr>
                		<?php }}}else{
                			?>
                			<td colspan=6>Aucun Produit</td>

                		<?php } ?>	
				 <tr>
                  <td colspan="5" style="text-align:right"><strong>TOTAL  =</strong></td>
                  <td class="label label-important" style="display:block"> <strong> <?php echo $total; ?></strong></td>
                </tr>
				</tbody>
            </table>
		
			
	<a href="login.php" class="btn btn-large"><i class="icon-arrow-left"></i> Vider le panier </a>
	<a href="FormulaireClient.php" class="btn btn-large pull-right"> Valider la commande<i class="icon-arrow-right"></i></a>
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	
<span id="themesBtn"></span>
</body>
</html>