<?php include('access.php');
$query_listmm = "SELECT * FROM tbl_member ORDER BY mem_id ASC";
$listmm = mysqli_query($condb, $query_listmm);
$row_listmm = mysqli_fetch_assoc($listmm);
$totalRows_member = mysqli_num_rows($listmm);
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
        <h3 align="center"> รายการ สมาชิก  <a href="add_member.php" class="btn btn-primary"> + เพิ่ม </a> </h3>
          <table id="example" class="display" cellspacing="0" border="1">
		<thead>
            <tr align="center">
              <th>id</th>
              <th width="20%">ข้อมูล</th>
              <th width="50%">ที่อยู่</th>
              <th>แก้ไข </th>
              <th>ลบ</th>
            </tr>
        </thead>
        <?php if($totalRows_member>0){?>
            <?php do { ?>
              <tr>
                <td><?php echo $row_listmm['mem_id']; ?></td>
                <td> 
                ชื่อ :  <?php echo $row_listmm['mem_name']; ?> <br>
                user: <?php echo $row_listmm['mem_username']; ?> <br>
                pass : <?php echo $row_listmm['mem_password']; ?>
                </td>
                <td>
				<?php echo $row_listmm['mem_address']; ?> <br> 
                phone:  <?php echo $row_listmm['mem_tel']; ?><br>
                email : <?php echo $row_listmm['mem_email']; ?>
                
                </td>
                <td><center> <a href="edit_member.php?mem_id=<?php echo $row_listmm['mem_id'];?>" class="btn btn-warning btn-xs"> แก้ไข </a> </center> </td>
                <td><center> <a href="del_member.php?mem_id=<?php echo $row_listmm['mem_id'];?>" onClick="return confirm('ยืนยันการลบ');" class="btn btn-danger btn-xs"> ลบ </a> </center> </td>
              </tr>
              <?php } while ($row_listmm = mysqli_fetch_assoc($listmm)); ?>
              <?php } ?>
          </table>
        </div>
    </div>
 </div> 
  </body>
</html>
 
<?php  include('f.php');?>