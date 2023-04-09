<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('h.php');?>
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
        <div class="row" style="padding-top:100px">
        <div class="col-md-4"></div>
    	<div class="col-md-4" style="background-color:#f4f4f4">
                  <h3 align="center">
                  <span class="glyphicon glyphicon-lock"> </span>
                   Form Login For Admin</h3>
                  <form action=""  name="formlogin" method="POST" id="login" class="form-horizontal">
                    <div class="form-group">
                      <div class="col-sm-12">
                        <input  name="admin_user" type="text" required class="form-control" id="admin_user" placeholder="Username" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12">
                        <input name="admin_pass" type="password" required class="form-control" id="admin_pass" placeholder="Password" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary" id="btn">
                        <span class="glyphicon glyphicon-log-in"> </span>
                         Login </button>
                      </div>
                    </div>
                  </form>


 <?php 
 //login
if(isset($_POST['admin_user']) && $_POST['admin_user'] !='' ){
  //รับค่า user & password
                  $admin_user = $_POST['admin_user'];
                  $admin_pass = $_POST['admin_pass'];
        //query 
                  $sql="
                  SELECT * 
                  FROM tbl_admin 
                  WHERE admin_user='".$admin_user."' 
                  AND 
                  admin_pass='".$admin_pass."' ";
                  $result = mysqli_query($condb,$sql);

                  // echo $sql;
                  // echo '<br>';
                  // echo mysqli_num_rows($result);
                  // exit();
        
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
                      $_SESSION["admin_id"] = $row["admin_id"];
                      //exit();
                      if($_SESSION["admin_id"] > 0){ 
                        Header("Location: backend/");
                      }else{
                        echo "<script>";
                          echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
                          echo "window.location ='login_admin.php'; ";
                        echo "</script>";
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.location ='login_admin.php'; ";
                    echo "</script>";
 
                  }

}


 ?>


                </div>
              </div>
            </div>
        </div>
    </div>
 </div>
  </body>
</html>
<?php include('f.php');?>