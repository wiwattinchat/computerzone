<?php include('access.php');
$query_prd = "
SELECT * FROM tbl_product as p, tbl_type as t
WHERE p.t_id = t.t_id
ORDER BY p.p_id ASC";
$prd = mysqli_query($condb, $query_prd);
$row_prd = mysqli_fetch_assoc($prd);
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
      <div class="col-md-10">
        <h3 align="center"> รายการสินค้า <a href="add_product.php" class="btn btn-primary"> เพิ่มสินค้า </a> </h3>
           <table width="100%" border="1" cellspacing="0" class="display" id="example">
		<thead>
          <tr>
            <th width="5%">id</th>
            <th width="10%">ประเภท</th>
            <th width="50%">รายละเอียด</th>
            <th width="7%">ราคา</th>
            <th width="7%">จำนวน</th>
            <th width="10%">ภาพสินค้า</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
          </tr>
          </thead>
          <?php do { ?>
            <tr>
              <td align="center" valign="top"><?php echo $row_prd['p_id']; ?></td>
              <td valign="top"><?php echo $row_prd['t_name']; ?></td>
              <td valign="top"><b> <?php echo $row_prd['p_name']; ?> 

              <a href="product_detail.php?p_id=<?php echo $row_prd['p_id'];?>&t_id=<?php echo $row_prd['t_id'];?>&act=edit" class="btn btn-info btn-xs" target="_blank"> รายละเอียด </a>
              </b>
              <br>
              <?php // echo $row_prd['p_detial']; ?>
               </td>
              <td align="right" valign="top"><?php echo $row_prd['p_price']; ?></td>
              <td align="center" valign="top">
			  <?php  //echo $row_prd['p_qty']; ?>
              <br>
               <?php echo $row_prd['p_qty']; ?> 
              <?php echo $row_prd['p_unit'];?>
              </td>
              <td><img src="../pimg/<?php echo $row_prd['p_img1'];?>" width="150px"></td>
              <td><center> 
              <a href="edit_product.php?p_id=<?php echo $row_prd['p_id'];?>&t_id=<?php echo $row_prd['t_id'];?>&act=edit" class="btn btn-warning btn-xs"> 
              แก้ไข </a>
              </center></td>
              <td><center> <a href="del_product.php?p_id=<?php echo $row_prd['p_id'];?>" class="btn btn-danger btn-xs" onClick="return confirm('ยืนยันการลบ');"> ลบ </a> </center></td>
            </tr>
            <?php } while ($row_prd = mysqli_fetch_assoc($prd)); ?>
        </table>
      </div>
    </div>
 </div> 
  </body>
</html>
<?php include('f.php');?>