<?php include('access.php');
$n_id = $_GET['n_id'];
$query_editnews = "SELECT * FROM tbl_news WHERE n_id = $n_id";
$editnews = mysqli_query($condb, $query_editnews);
$row_editnews = mysqli_fetch_assoc($editnews);
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
        <h3 align="center"> แก้ไขข่าว <?php include('edit-ok.php');?> </h3>
        
        		<form action="edit_news_db.php"  method="post" enctype="multipart/form-data" name="Add_Product" id="Add_Product" >

  
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="3" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td width="129" align="right" valign="middle">หัวข้อ :</td>
      <td width="471" colspan="2"><label for="pro_name2"></label>
        <input name="a_title" type="text" required id="pro_name2" value="<?php echo $row_editnews['n_title']; ?>" size="80"/></td>
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
      <td align="right" valign="top">รายละเอียด :</td>
      <td colspan="2">
      <textarea name="a_detail" id="a_detail" class="ckeditor" cols="80" rows="5"><?php echo $row_editnews['n_detail']; ?></textarea>
      </td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2"><input name="n_id" type="hidden" id="n_id" value="<?php echo $row_editnews['n_id']; ?>">
        <input name="img" type="hidden" id="img" value="<?php echo $row_editnews['n_img']; ?>"></td>
    </tr>
    <tr>
      <td align="right" valign="middle">ภาพข่าว</td>
      <td colspan="2"><label for="n_img"></label>
        <input type="file" name="n_img" id="n_img"></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">ภาพเก่า<br>
      <img src="../nimg/<?php echo $row_editnews['n_img'];?>" width="100px"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">
      
      <br><br><br>
      <button type="submit" name="button" id="button" value="บันทึก" class="btn btn-primary">บันทึก</button></td>
    </tr>
  </table> 
</form>
            
      </div>
    </div>
 </div> 
  </body>
</html>
 
<?php include('f.php');?>