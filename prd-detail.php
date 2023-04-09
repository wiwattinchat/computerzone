<?php
$p_id = $_GET['p_id'];
$query_prdt = "SELECT * FROM tbl_product WHERE p_id = $p_id";
$prdt = mysqli_query($condb, $query_prdt);
$row_prdt = mysqli_fetch_assoc($prdt);

if (mysqli_num_rows($prdt) !=1) {
  exit();
}
 

//update product view
$p_id = $row_prdt['p_id'];
$p_view = $row_prdt['p_view'];
$count = $p_view + 1;

$sql= "UPDATE tbl_product SET  p_view=$count WHERE p_id = $p_id";
	mysqli_query($condb,$sql);
//
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include('h.php');?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
	<div class="col-sm-5 col-xs-12">
    	<img src="pimg/<?php echo $row_prdt['p_img1'];?>" class="img img-responsive">
      <br>
      <img src="pimg/<?php echo $row_prdt['p_img2'];?>" class="img img-responsive hidden-xs">
    </div>
    <div class="col-md-7 col-xs-12">
   <h4>  ชื่อสินค้า :  <?php echo $row_prdt['p_name']; ?>     รายการ</h4>
    รายละเอียด : <?php echo $row_prdt['p_detial']; ?>  
    <font color="blue">

    <h3> ราคา 
      <?php echo number_format($row_prdt['p_price'],2); ?>  บาท  
    </h3> </font> <br />
    <b> คงเหลือ <?php echo $row_prdt['p_qty']; ?></b> 
    จำนวนการเข้าชม <?php echo $row_prdt['p_view']; ?>  ครั้ง  
   
    <br /><br />

    <?php 
      $qty = $row_prdt['p_qty'];
    if($qty == 0){
      echo "<font color='red'>";
      echo "<button class='btn btn-danger btn-xs' disabled='disabled'>หมด!</button>";
      echo "</font>";
      }else{ 


        ?>  
      
      
      <a href="index.php?p_id=<?php echo $row_prdt['p_id'];?>&act=add" class="btn btn-success"> <span class="glyphicon glyphicon-shopping-cart"></span>  สั่งซื้อ </a>
    
 
      <?php  } ?>

    <!-- <a href="index.php?p_id=<?php // echo $row_prdt['p_id'];?>&act=add" class="btn btn-success"> <span class="glyphicon glyphicon-shopping-cart"> เพิ่มลงตะกร้า </span> </a>
     -->
    
    </div>
</body>
</html>
 
