<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');


$postcode = $_POST['postcode'];
$order_id = $_POST['order_id'];
$order_status = $_POST['order_status'];

 
$sql ="UPDATE tbl_order SET	 
		postcode='$postcode',
		order_status='$order_status'
		WHERE order_id=$order_id
	 ";
		
		$result = mysqli_query($condb, $sql);
//  echo $sql;
// exit();
		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "alert('เพิ่มเลขพัสดุเรียบร้อยแล้วครับ !');";
			echo "window.location ='index.php?order_id=$order_id&act=show-order'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_product.php'; ";
			echo "</script>";
		}
		


?>