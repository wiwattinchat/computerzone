<?php include('access.php');
$query_ptype = "SELECT * FROM tbl_type";
$ptype = mysqli_query($condb, $query_ptype);
$row_ptype = mysqli_fetch_assoc($ptype);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('h.php');?>
    <?php include('datatable.php');?>
  </head>
  <body>
  <div class="container">
  <div class="row">
         <?php include('banner.php');?>
   </div>
  	<div class="row">
    	<div class="col-md-2">
        <b>  ADMIN : <?php include('mm.php');?> </b>
        <br>
        <?php include('menu.php');?>        	 
      </div>
      <div class="col-md-6">
        <h3 align="center"> เพิ่มประเภทสินค้า </h3>
        <form action="add_product_type_db.php" method="POST" name="ptype" id="ptype" class="form-horizontal">
        	<div class="form-group">
            	<div class="col-sm-3" align="right"> ประเภทสินค้า </div>
                <div class="col-sm-7">
                	<input type="text" name="t_name" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
            	<div class="col-sm-3"></div>
                <div class="col-sm-7">
                	<button type="submit" name="save" class="btn btn-primary"> บันทึก </button> 
                </div>
             </div>
           
        </form>
      </div>
    </div>
 </div> 
  </body>
</html>
<?php include('f.php');?>