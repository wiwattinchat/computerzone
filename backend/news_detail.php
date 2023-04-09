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
        <h3 align="center">
        <a href="list_news.php" class="btn btn-default"> < ย้อนกลับ </a> 
         ข้อมูลข่าว <?php include('edit-ok.php');?> </h3>
        
        		<form action="edit_news_db.php"  method="post" enctype="multipart/form-data" name="Add_Product" id="Add_Product" >

  
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="3" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td width="129" align="right" valign="middle">หัวข้อ :</td>
      <td width="471" colspan="2"><label for="pro_name2"></label>
        <input name="a_title" type="text" disabled required id="pro_name2" value="<?php echo $row_editnews['n_title']; ?>" size="80"/></td>
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
      <textarea name="a_detail" cols="80" rows="5" disabled class="ckeditor" id="a_detail"><?php echo $row_editnews['n_detail']; ?></textarea>
      </td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2"><img src="../nimg/<?php echo $row_editnews['n_img']; ?>" width="300px">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table> 
</form>
            
      </div>
    </div>
 </div> 
  </body>
</html>
<?php include('f.php');?>