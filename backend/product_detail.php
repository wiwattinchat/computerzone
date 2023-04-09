<?php include('access.php');

$query_ptype = "SELECT * FROM tbl_type";
$ptype = mysqli_query($condb, $query_ptype);
$row_ptype = mysqli_fetch_assoc($ptype);


$p_id = $_GET['p_id'];
$query_eprd = "SELECT * FROM tbl_product WHERE p_id = $p_id";
$eprd = mysqli_query($condb, $query_eprd);
$row_eprd = mysqli_fetch_assoc($eprd);
 

$t_id=$_GET['t_id'];
$query_prd = "
SELECT * FROM  tbl_type as t
WHERE t.t_id=$t_id";
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
    <!-- ckeditor-->
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

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
        <h3 align="center">
        <a href="list_product.php" class="btn btn-default"> < ย้อนกลับ</a>
        ข้อมูลสินค้า
        	<?php // include('edit-ok.php');?>
        </h3>
        
        		<form action="edit_product_db.php"  method="post" enctype="multipart/form-data" name="Add_Product" id="Add_Product" >

  
  <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="3" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td width="129" align="right" valign="middle">ชื่อสินค้า :</td>
      <td colspan="2"><label for="pro_name2"></label>
        <input name="p_name" type="text" disabled required id="pro_name2" value="<?php echo $row_eprd['p_name']; ?>" size="50"/></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">ประเภทสินค้า :</td>
      <td colspan="2">
      <label for=""></label>
        <select name="t_id" id="t_id" required="required">
         <option value="<?php echo $row_prd['t_id'];?>"><?php echo $row_prd['t_name'];?></option>
          <option value="">กรุณาเลือกประเภท</option>
          <?php
do {  
?>
          <option value="<?php echo $row_ptype['t_id']?>"><?php echo $row_ptype['t_name']?></option>
          <?php
} while ($row_ptype = mysqli_fetch_assoc($ptype));
  $rows = mysqli_num_rows($ptype);
  if($rows > 0) {
      mysqli_data_seek($ptype, 0);
	  $row_ptype = mysqli_fetch_assoc($ptype);
  }
?>
        </select>
        </td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="top">รายละเอียดสินค้า :</td>
      <td colspan="2">
      <textarea name="p_detial" cols="80" rows="5" disabled class="ckeditor" id="p_detial"><?php echo $row_eprd['p_detial']; ?></textarea>
      </td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">ราคาขาย :</td>
      <td width="190"><label for="p_price"></label>
         <input name="p_price" type="number" required id="p_price" value="<?php echo $row_eprd['p_price']; ?>"/></td>
      <td width="281">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">หน่วยสินค้า</td>
      <td colspan="2"><label for="pro_qty"></label>
         :
  <select name="p_unit" id="p_unit" required>
  <option value="<?php echo $row_eprd['p_unit'];?>"><?php echo $row_eprd['p_unit'];?></option>
    <option value="">เลือกใหม่</option>
    <option value="ชิ้น">ชิ้น</option>
    <option value="กล่อง">กล่อง</option>
    <option value="แผง">แผง</option>
    <option value="ตัว">ตัว</option>
    <option value="รายการ">รายการ</option>
  </select></td>
      </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">
      <img src="../pimg/<?php echo $row_eprd['p_img1']; ?>" width="100">
       <img src="../pimg/<?php echo $row_eprd['p_img2']; ?>" width="100">
      </td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">
      <a href="list_product.php" class="btn btn-default"> < ย้อนกลับ</a></td>
    </tr>
  </table> 
</form>
            
      </div>
    </div>
 </div> 
  </body>
</html>
<?php include('f.php');?>