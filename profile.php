<?php 
 include('h.php'); 
$query_pf = "SELECT * FROM tbl_member WHERE mem_id = $mem_id";
$pf = mysqli_query($condb, $query_pf);
$row_pf = mysqli_fetch_assoc($pf);
 
?>
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
         <?php include('banner.php');?>
   </div>
  	<div class="row">
    	<div class="col-md-12">
        	<?php include('navbar.php');?>
        </div>
    </div>
 </div> 
 <!--start show  product-->
 <div class="container">
 	<div class="row">
    	<!-- menu-->
    	<div class="col-md-3">
        	  <?php include('m_menu.php');?>
        </div>
        <!-- content-->
        <div class="col-md-1"></div>
        <div class="col-md-6">
        
        	<?php 
			 $do = $_GET['do'];
			 if($do =='edit-profile'){
					include('edit_profile.php');
			 }else{
			?>
        	<p style="font-size:18px">
            โปรไฟล์ คุณ <?php echo $row_pf['mem_name']; ?>  <a href="profile.php?do=edit-profile" class="btn btn-warning btn-xs">แก้ไข</a> <br>
            Username : <?php echo $row_pf['mem_username']; ?> <br>
            ที่อยู่  : <?php echo $row_pf['mem_address']; ?> <br>
            อีเมล์ : <?php echo $row_pf['mem_email']; ?> <br>
            เบอร์โทร : <?php echo $row_pf['mem_tel']; ?> <br>
            เป็นสมาชิกเมื่อ : <?php echo $row_pf['dateinsert']; ?>
            </p>
            
            <?php } ?>
            
        </div>
    </div>
</div>
 <!--end show  product-->
 
 
 
 
 
  </body>
</html>
 
<?php include('f.php');?>