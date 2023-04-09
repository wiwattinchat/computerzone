<?php include('access.php');
 
$t_id = $_GET['t_id'];
$query_edittype = "SELECT * FROM tbl_type WHERE t_id = $t_id";
$edittype = mysqli_query($condb, $query_edittype);
$row_edittype = mysqli_fetch_assoc($edittype);
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
        <h3 align="center"> แก้ไขประเภทสินค้า </h3>
        <form action="edit_product_type_db.php" method="POST" name="ptype" id="ptype" class="form-horizontal">
        	<div class="form-group">
            	<div class="col-sm-3" align="right"> ประเภทสินค้า </div>
                <div class="col-sm-7">
                	<input name="t_name" type="text" required class="form-control" value="<?php echo $row_edittype['t_name']; ?>">
                </div>
            </div>
            <div class="form-group">
            	<div class="col-sm-3"></div>
                <div class="col-sm-7">
                	<button type="submit" name="save" class="btn btn-primary"> บันทึก </button>
                	<input name="t_id" type="hidden" id="t_id" value="<?php echo $row_edittype['t_id']; ?>"> 
                </div>
             </div>
        </form>
      </div>
    </div>
 </div> 
  </body>
</html>
<?php include('f.php');?>