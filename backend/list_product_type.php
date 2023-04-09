<?php include('access.php');
$query_ptype = "SELECT * FROM tbl_type";
$ptype = mysqli_query($condb, $query_ptype);
$row_ptype = mysqli_fetch_assoc($ptype);
$totalRows_ptype = mysqli_num_rows($ptype);
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
        <h3 align="center"> ประเภทสินค้า <a href="add_product_type.php" class="btn btn-primary"> เพิ่มประเภท </a> </h3>
        <table id="example" class="display" cellspacing="0" border="1">
		<thead>
          <tr>        
            <th width="5%">id</th>
            <th width="50%">name</th>
            <th width="5%"> <center> แก้ไข </center></th>
            <th width="5%"> <center> ลบ </center></th>
          </tr>
        </thead>
        <?php if($totalRows_ptype>0){?>
          <?php do { ?>
            <tr>
              <td align="center"><?php echo $row_ptype['t_id']; ?></td>
              <td><?php echo $row_ptype['t_name']; ?></td>
              <td><center> <a href="edit_product_type.php?t_id=<?php echo $row_ptype['t_id'];?>" class="btn btn-warning btn-xs"> แก้ไข </a> </center></td>
              <td><center> 
              <a href="del_product_type.php?t_id=<?php echo $row_ptype['t_id'];?>" class="btn btn-danger btn-xs" onClick="return confirm('ยืนยันการลบ');"> 
              ลบ </a></center></td>
            </tr>
            <?php } while ($row_ptype = mysqli_fetch_assoc($ptype)); ?>
        <?php } ?>
        </table>
      </div>
    </div>
 </div> 
  </body>
</html>
 
<?php include('f.php');?>