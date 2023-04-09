<?php require_once('Connections/condb.php'); 
$query_rb = "SELECT * FROM tbl_bank";
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
	
  <link rel="icon" href="img/50616441.png">
    <style type="text/css">
    input[type=number]{
    width:40px;
    text-align:center;
    color:red;
    font-weight:600;
    }
    </style>
    
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
    	<div class="col-md-12">
        		<h3 align="center"> เลขบัญชีสำหรับชำระเงิน <br>
                <font color="red"> *กรุณา Login เพื่อชำระเงิน </font> </h3>
                <table border="1" align="center" class="table table-hover">
                  <tr class="success">
                    <td></td>
                    <td>ธนาคาร</td>
                    <td>ประเภท</td>
                    <td>เลขบัญชี</td>
                    <td>ชื่อบัญชี</td>
                    <td>สาขา</td>
                  </tr>
                  <?php do { ?>
                    <tr>
                      <td><img src="bimg/<?php echo $row_rb['b_logo']; ?>" width="50"></td>
                      <td><?php echo $row_rb['b_name']; ?></td>
                      <td><?php echo $row_rb['b_type']; ?></td>
                      <td><?php echo $row_rb['b_number']; ?></td>
                      <td><?php echo $row_rb['b_owner']; ?></td>
                      <td><?php echo $row_rb['bn_name']; ?></td>
                    </tr>
                    <?php } while ($row_rb = mysqli_fetch_assoc($rb)); ?>
                </table>
        </div>
    </div>
</div>
  </body>
</html>
<?php include('f.php');?>