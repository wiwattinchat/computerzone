<?php include('access.php'); 
$query_listadmin = "SELECT * FROM tbl_admin ORDER BY admin_id ASC";
$listadmin = mysqli_query($condb, $query_listadmin);
$row_listadmin = mysqli_fetch_assoc($listadmin);
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
        <h3 align="center"> รายการ Admin  <a href="add_admin.php" class="btn btn-primary"> + เพิ่ม </a> </h3>
          <table id="example" class="display" cellspacing="0" border="1">
		<thead>
            <tr align="center">
              <th width="5%">admin_id</th>
              <th width="10%">admin_user</th>
              <th width="10%">admin_pass</th>
              <th width="10%">admin_name</th>
              <th width="15%">date_save</th>
              <th width="5%">แก้ไข </th>
              <th width="5%">ลบ</th>
            </tr>
        </thead>
            <?php do { ?>
              <tr>
                <td align="center"><?php echo $row_listadmin['admin_id']; ?></td>
                <td><?php echo $row_listadmin['admin_user']; ?></td>
                <td><?php echo $row_listadmin['admin_pass']; ?></td>
                <td><?php echo $row_listadmin['admin_name']; ?></td>
                <td><?php echo $row_listadmin['date_save']; ?></td>
                <td><center> <a href="edit_admin.php?admin_id=<?php echo $row_listadmin['admin_id'];?>" class="btn btn-warning btn-xs"> แก้ไข </a> </center> </td>
                <td><center> <a href="del_admin.php?admin_id=<?php echo $row_listadmin['admin_id'];?>" onClick="return confirm('ยืนยันการลบ');" class="btn btn-danger btn-xs"> ลบ </a> </center> </td>
              </tr>
              <?php } while ($row_listadmin = mysqli_fetch_assoc($listadmin)); ?>
          </table>
        </div>
    </div>
 </div> 
  </body>
</html>

<?php include('f.php');?>