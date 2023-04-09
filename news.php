<?php include('h.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="icon" href="img/50616441.png">
    <style type="text/css">
    input[type=number]{
    width:40px;
    text-align:center;
    color:red;
    font-weight:600;
    }
    </style>
    
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
    	<div class="col-md-2">
        	<?php include('category.php');?>
        </div>
    	<div class="col-md-10">
    <div class="panel panel-danger">
            <div class="panel-heading">
            <h4> ข่าวสารจากทางร้าน
             </h4> 
             </div>
            </div>     
                <?php 
				$n_id = $_GET['n_id'];
				
				if($n_id !=''){
					include('list_news_detail.php');
					
				}else{
					include('list_news.php');
				}
				
				
				
				
				?>
        </div>
    </div>
</div>
 
  </body>
</html>
<?php include('f.php');?>