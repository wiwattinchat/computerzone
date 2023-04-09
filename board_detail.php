<?php require_once('Connections/condb.php'); 
$b_id = $_GET['b_id'];

$query_rb = "SELECT * FROM tbl_board WHERE b_id=$b_id";
$rb = mysqli_query($condb, $query_rb);
$row_rb = mysqli_fetch_assoc($rb);
if (mysqli_num_rows($rb) !=1) {
  exit();
}
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
    	
      <div class="col-md-12">
        		<h3 align="center"> รายละเอียดกระทู้ </h3>
      </div> 
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
        </div> 
        <div class="row">
      <div class="col-md-2"></div> 
      <div class="col-md-8" style="background-color:#f8f8f8">

            
            <h4> คำตอบ : <br />
             &nbsp;   &nbsp;   &nbsp;  
              <?php echo $row_rb['a_ans'];?> </h4><br />
            ว/ด/ป : <?php echo date('d/m/Y',strtotime($row_rb['a_ans_date']));?>
                
        </div>
    </div>
</div>
  </body>
</html>
<br><br>
<?php include('f.php');?>