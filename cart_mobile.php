<?php include('h.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
  </head>
  <body>
  <div class="container">
  <div class="row">
         <?php 
         include('datatable.php');
         include('banner.php');?>
   </div>
  	<div class="row">
    	<div class="col-md-12">
        	<?php include('navbar.php');?>
        </div>
    </div>
 </div> 
 
 <div class="container">
 	<div class="row">
        	<!-- categories-->
    	<div class="col-md-12 col-xs-12">
    <div class="panel panel-danger">
            <div class="panel-heading">
            <h4> ตะกร้าสินค้า
             </h4> 
             </div>
            </div>     
        <?php 

        include('cart.m.php');
			
				?>
        </div>
    </div>
</div>
 
  </body>
</html>
<?php include('f.php');?>