<?php include('access.php');
$query_lbk = "SELECT * FROM tbl_bank";
$lbk = mysqli_query($condb, $query_lbk);
$row_lbk = mysqli_fetch_assoc($lbk);
$totalRows_lbk = mysqli_num_rows($lbk);
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
        <div class="col-md-7">
        <h3 align="center"> รายการธนาคาร  <a href="add_bank.php" class="btn btn-primary"> + เพิ่ม </a> </h3>
          <table id="example" class="display" cellspacing="0" border="1">
		<thead>
            <tr align="center">
              <th width="5%">id</th>
              <th width="60%">รายละเอียด</th>
              <th width="5%">Logo</th>
              <th width="5%">แก้ไข </th>
              <th width="5%">ลบ</th>
            </tr>
        </thead>
        <?php if($totalRows_lbk>0){?>
            <?php do { ?>
              <tr>
                <td valign="top">
				<center> 
				  <?php echo $row_lbk['b_id']; ?>
                </center>
                </td>
                <td>
                 
				<b><?php echo $row_lbk['b_name']; ?> </b><br>
                ประเภท : <?php echo $row_lbk['b_type']; ?><br>
                เลขบัญชี :  <?php echo $row_lbk['b_number']; ?><br>
                สาขา :  <?php echo $row_lbk['bn_name']; ?> <br>
                ชื่อ บ/ช : <?php echo $row_lbk['b_owner']; ?> <br>

                </td>
                <td><center><img src="../bimg/<?php echo $row_lbk['b_logo'];?>" width="100px"></center></td>
                <td><center> <a href="edit_bank.php?b_id=<?php echo $row_lbk['b_id'];?>" class="btn btn-warning btn-xs"> แก้ไข </a> </center> </td>
                <td><center> <a href="del_bank.php?b_id=<?php echo $row_lbk['b_id'];?>" onClick="return confirm('ยืนยันการลบ');" class="btn btn-danger btn-xs"> ลบ </a> </center> </td>
              </tr>
              <?php } while ($row_lbk = mysqli_fetch_assoc($lbk)); ?>
              <?php } ?>
          </table>
        </div>
    </div>
 </div> 
  </body>
</html>
<?php  include('f.php');?>