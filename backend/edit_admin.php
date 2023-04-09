<?php include('access.php');
$admin_id = $_GET['admin_id'];
$query_editadmin = "SELECT * FROM tbl_admin WHERE admin_id = $admin_id";
$editadmin = mysqli_query($condb, $query_editadmin);
$row_editadmin = mysqli_fetch_assoc($editadmin);
$totalRows_editadmin = mysqli_num_rows($editadmin);
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
          <h3 align="center">  แก้ไข  Admin  <?php include('edit-ok.php');?> </h3>
          
          <form  name="register" action="edit_admin_db.php" method="POST" id="register" class="form-horizontal">
            <div class="form-group">
              <div class="col-sm-2">  </div>
              <div class="col-sm-5" align="left">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2" align="right"> Username : </div>
              <div class="col-sm-5" align="left">
                <input  name="admin_user" type="text" disabled   class="form-control" id="admin_user" placeholder="username" value="<?php echo $row_editadmin['admin_user']; ?>" minlength="2"  />
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-sm-2" align="right"> Password : </div>
              <div class="col-sm-5" align="left">
                <input  name="admin_pass" type="password" required class="form-control" id="admin_pass" placeholder="password" pattern="^[a-zA-Z0-9]+$" value="<?php echo $row_editadmin['admin_pass']; ?>" minlength="2" />
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2" align="right"> ชื่อ-สกุล : </div>
              <div class="col-sm-7" align="left">
                <input  name="admin_name" type="text" required class="form-control" id="admin_name" placeholder="ชื่อ-สกุล" value="<?php echo $row_editadmin['admin_name']; ?>" />
              </div>
            </div>
            
            
            
            <div class="form-group">
              <div class="col-sm-2"> </div>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary" id="btn"> บันทึก  </button>
                <input name="admin_id" type="hidden" id="admin_id" value="<?php echo $row_editadmin['admin_id']; ?>">
              </div>
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>

<?php include('f.php');?>