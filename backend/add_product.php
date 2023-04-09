<?php include('access.php');

$query_ptype = "SELECT * FROM tbl_type";
$ptype = mysqli_query($condb, $query_ptype);
$row_ptype = mysqli_fetch_assoc($ptype);
$totalRows_ptype = mysqli_num_rows($ptype);
 
$query_prd = "
SELECT * FROM tbl_product as p, tbl_type as t
WHERE p.t_id = t.t_id
ORDER BY p.p_id ASC";
$prd = mysqli_query($condb, $query_prd);
$row_prd = mysqli_fetch_assoc($prd);
$totalRows_prd = mysqli_num_rows($prd);
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
        <h3 align="center"> เพิ่มรายการสินค้า </h3>
        
        		<form action="add_product_db.php"  method="post" enctype="multipart/form-data" name="Add_Product" id="Add_Product" >

  
  <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="3" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td width="129" align="right" valign="middle">ชื่อสินค้า :</td>
      <td colspan="2"><label for="pro_name2"></label>
        <input name="p_name" type="text" required id="pro_name2" size="50"/></td>
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
      <textarea name="p_detial" id="p_detial" class="ckeditor" cols="80" rows="5"></textarea>
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
         <input type="number" name="p_price" id="p_price" required/> บาท </td>
      <td width="281">&nbsp;  </td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>

    <tr>
      <td align="right" valign="middle">จำนวน :</td>
      <td width="190"><label for="p_price"></label>
         <input type="number" name="p_qty" id="p_price" required/></td>
      <td width="281">&nbsp;  </td>
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
    <option value="">กรุณาเลือก</option>
    <option value="ชิ้น">ตัว</option>
    <option value="กล่อง">ชุด</option>
    <option value="แผง">ชิ้น</option>
    <option value="ตัว">อัน</option>
  </select></td>
      </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">รูปภาพสินค้า1 :</td>
      <td colspan="2"><label for="p_img1"></label>
        <input name="p_img1" type="file" required class="bg-warning" id="p_img1" size="40" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">รูปภาพสินค้า2 :</td>
      <td colspan="2"><label for="p_img2"></label>
        <input name="p_img2" type="file"  class="bg-warning" id="p_img2" size="40" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><button type="submit" name="button" id="button" value="ตกลง" class="btn btn-primary">เพิ่มสินค้า</button></td>
    </tr>
  </table> 
</form>
            
      </div>
    </div>
 </div> 
  </body>
</html>
<?php include('f.php');?>