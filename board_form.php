<?php require_once('Connections/condb.php');  
$query_rb = "SELECT * FROM tbl_board WHERE a_ans !='' order by b_id desc";
$rb = mysqli_query($condb, $query_rb);
$row_rb = mysqli_fetch_assoc($rb);
?>
<?php include('h.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
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
 
 <div class="container">
 	<div class="row">
    	<div class="col-md-1"></div> 
      <div class="col-md-9">
        		<h3 align="center"> ตั้งกระทู้ถามตอบ </h3>

            <form action="board_form_db.php" method="POST"  name="contact"  id="contact">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
         <tr>
            <td align="right"> หัวข้อ &nbsp;</td>
            <td colspan="2">
              <input name="b_title" type="text"  class="form-control" placeholder="กรุณากรอกข้อมูล" required></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top">รายละเอียด&nbsp;</td>
            <td colspan="3"><textarea name="b_detail" rows="3" required="required" class="form-control" id="detail" placeholder="กรุณากรอกข้อมูล"></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="right"> ชื่อ &nbsp;</td>
            <td colspan="2"><input name="b_name" type="text"  class="form-control" placeholder="กรุณากรอกข้อมูล" required></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="right"> E-mail &nbsp; </td>
            <td width="31%"><input name="b_email" type="email" id="Email" class="form-control" placeholder="เช่น abc@gmail.com " required></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td colspan="3" align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td colspan="3" align="left">
        
              <input type="submit" name="save" class="btn btn-primary" value="บันทึก" >
            
            </td>
          </tr>
          <tr>
            <td colspan="4" align="center"></td>
          </tr>
          <tr>
            <td align="right"><br /></td>
            <td>&nbsp;</td>
            <td width="10%">&nbsp;</td>
            <td width="41%">&nbsp;</td>
          </tr>
        </table>
      </form>
                
        </div>
    </div>
</div>
  </body>
</html> 
<?php include('f.php');?>