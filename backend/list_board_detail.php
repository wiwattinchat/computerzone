<?php include('access.php');
$b_id = $_GET['b_id'];
$query_rb = "SELECT * FROM tbl_board WHERE b_id=$b_id";
$rb = mysqli_query($condb, $query_rb);
$row_rb = mysqli_fetch_assoc($rb);
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
      <div class="col-md-2">
        <b>  ADMIN : <?php include('mm.php');?> </b>
        <br>
        <?php include('menu.php');?>
      </div>
      
      <div class="col-md-10">
        <h3 align="center"> รายละเอียดกระทู้ </h3>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8"  style="background-color:#f1f1f1">
          <h4> คำถาม : <?php echo $row_rb['b_title'];?> </h4>
          <b> รายละเอียด :  </b> <?php echo $row_rb['b_detail'];?> <br />
          <b> โดย : </b> <?php echo $row_rb['b_name'];?>, email: <?php echo $row_rb['b_email'];?> <br />
          ว/ด/ป : <?php echo date('d/m/Y',strtotime($row_rb['date_save']));?>
          <hr/>
        </div>
        <hr />
        <div class="col-md-2"></div>
        <div class="col-md-8" style="background-color:#f8f8f8">
          
          <h4>ตอบคำถาม : <br />
          <form action="list_board_db.php" method="POST"  name="contact"  id="contact">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="18%" align="right" valign="top"></td>
                <td colspan="2">
                <textarea name="a_ans" rows="3" required="required" class="form-control" id="detail" placeholder="กรุณากรอกข้อมูล"><?php echo $row_rb['a_ans'];?></textarea></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center">&nbsp;</td>
                <td colspan="3" align="left">
                  <br />
                  
                  <input type="submit" name="save" class="btn btn-primary" value="บันทึก" >
                  <input type="hidden" name="b_id" value="<?php echo $row_rb['b_id'];?>">
                  
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
<?php  include('f.php');?>