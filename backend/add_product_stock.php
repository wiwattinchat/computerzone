<?php include('access.php');
$query_ptype = "SELECT * FROM tbl_type";
$ptype = mysqli_query($condb, $query_ptype);
$row_ptype = mysqli_fetch_assoc($ptype);
$totalRows_ptype = mysql_num_rows($ptype);

 
$p_id = $_GET['p_id'];
 
$query_eprd = "SELECT * FROM tbl_product WHERE p_id =$p_id";
$eprd = mysqli_query($condb, $query_eprd);
$row_eprd = mysqli_fetch_assoc($eprd);
$totalRows_eprd = mysql_num_rows($eprd);

 
$query_liststock = "
SELECT * FROM tbl_product_stock  as s, tbl_product as p
WHERE s.p_id = $p_id  AND s.p_id=p.p_id
ORDER BY s.st_date DESC";
$liststock = mysqli_query($condb, $query_liststock);
$row_liststock = mysqli_fetch_assoc($liststock);
$totalRows_liststock = mysql_num_rows($liststock);

$t_id=$_GET['t_id'];
$query_prd = "
SELECT * FROM  tbl_type as t
WHERE t.t_id=$t_id";
$prd = mysqli_query($condb, $query_prd);
$row_prd = mysqli_fetch_assoc($prd);
$totalRows_prd = mysql_num_rows($prd);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('h.php');?>
    <?php include('datatable2.php');?>
    <!-- ckeditor-->
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

  </head>
  <body>
  <div class="container">
  <div class="row">
  <span id="hp">
         <?php include('banner.php');?>
  </span>
   </div>
  	<div class="row">
    	<div class="col-md-2">
        <b>  ADMIN : <?php include('mm.php');?> </b>
        <br>
        <span id="hp">
        <?php include('menu.php');?> 
        </span>       	 
      </div>
      <div class="col-md-10">
      <span id="hp">
        <h3 align="center"> จัดการสต็อกสินค้า 
         
       	  <?php include('edit-ok.php');?>
        </h3>
        
        		<form action="add_product_stock_db.php"  method="post" enctype="multipart/form-data" name="Add_Product" id="Add_Product" >

  
  <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="3" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td width="129" align="right" valign="middle">ชื่อสินค้า :</td>
      <td width="471" colspan="2">
        <?php echo $row_eprd['p_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp; ราคา<?php echo $row_eprd['p_price']; ?>บาท</td>
    </tr>
    <tr>
      <td align="right" valign="middle">ประเภทสินค้า :</td>
      <td colspan="2">
  <?php echo $row_ptype['t_name']?>
        </td>
    </tr>
    <tr>
      <td align="right" valign="top">รายละเอียดสินค้า :</td>
      <td colspan="2">
        <?php echo $row_eprd['p_detial']; ?>
        </td>
    </tr>
    <tr>
      <td align="right" valign="middle"><b> จำนวนสินค้าคงเหลือ </b></td>
      <td colspan="2"> :<font color="red"> <b> <?php echo $row_eprd['p_qty']; ?> </b> </font> <?php echo $row_eprd['p_unit'];?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right">เพิ่มสินค้า</td>
      <td colspan="2"><label>
        <input type="number" name="p_qty" id="p_qty" required min="1">
        <input name="p_id" type="hidden" id="p_id" value="<?php echo $row_eprd['p_id']; ?>">
        <input name="p_stock" type="hidden" id="p_stock" value="<?php echo $row_eprd['p_qty']; ?>">
        <input name="t_id" type="hidden" id="t_id" value="<?php echo $row_eprd['t_id']; ?>">
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><button type="submit" name="button" id="button" value="ตกลง" class="btn btn-success">บันทึก</button></td>
    </tr>
  </table> 
</form>
 </span>         
          
          <br>
        <h3 align="center"> ประวัติการเพิ่มสต๊อก </h3>
        <p align="center"> <button class="btn btn-primary btn-sm" onclick="window.print()"> พิมพ์ </button>  </p>
        สินค้าคงเหลือ <font color="red"> <b> <?php echo $row_eprd['p_qty']; ?> </b> </font> <?php echo $row_eprd['p_unit'];?>
       <table id="example" class="display" cellspacing="0" border="1">
		<thead>
          <tr>
            <th>ลำดับ</th>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>จำนวน</th>
            <th>วันที่ทำรายการ</th>
          </tr>
          </thead>
          <?php $i=1; do { ?>
            <tr>
              <td align="center"><?php echo $i; ?></td>
              <td align="center"><?php echo $row_liststock['p_id']; ?></td>
              <td><?php echo $row_liststock['p_name']; ?></td>
              <td align="center"><?php echo $row_liststock['p_qty_add']; ?></td>
              <td><?php echo $row_liststock['st_date']; ?></td>
          </tr>
          <?php $i++; } while ($row_liststock = mysqli_fetch_assoc($liststock)); ?>
        </table>
      </div>
    </div>
 </div> 
 

 
  </body>
</html>
<?php include('f.php');?>