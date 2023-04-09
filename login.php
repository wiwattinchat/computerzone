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
                   กรุณา Login ก่อนทำรายการ ! </h3>
                  <form  name="formlogin" action="" method="POST" id="login" class="form-horizontal">
                    <div class="form-group">
                      <div class="col-sm-12">
                        <input  name="mem_username" type="text" required class="form-control" id="mem_username" placeholder="Username" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12">
                        <input name="mem_password" type="password" required class="form-control" id="mem_password" placeholder="Password" />
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
                </div>
              </div>
            </div>
        </div>
    </div>
 </div>

 <?php 
 //login
if(isset($_POST['mem_username']) && $_POST['mem_username'] !='' ){
  //รับค่า user & password
                  $mem_username = $_POST['mem_username'];
                  $mem_password = $_POST['mem_password'];
        //query 
                  $sql="
                  SELECT * 
                  FROM tbl_member 
                  WHERE mem_username='".$mem_username."' 
                  AND 
                  mem_password='".$mem_password."' ";
                  $result = mysqli_query($condb,$sql);

                  // echo $sql;
                  // echo '<br>';
                  // echo mysqli_num_rows($result);
                  // exit();
        
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
                      $_SESSION["mem_id"] = $row["mem_id"];
                      //exit();
                      if($_SESSION["mem_id"] > 0){ 
                        Header("Location: index.php");
                      }else{
                        echo "<script>";
                          echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
                          echo "window.location ='login.php'; ";
                        echo "</script>";
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.location ='login.php'; ";
                    echo "</script>";
 
                  }

}


 ?>
 
 
 
   
  </body>
</html>
<?php include('f.php');?>