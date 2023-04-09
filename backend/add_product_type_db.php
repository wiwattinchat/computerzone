<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');
 
$t_name = $_POST['t_name'];

 
$sql ="INSERT INTO tbl_type
		
		(
		t_name
		)
		
		VALUES
		
		(
		'$t_name'	
		)";
		
		$result = mysqli_query($condb, $sql);
 
// echo $sql;
//  exit();

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "alert('เพิ่มประเภทสินค้าเรียบร้อยแล้ว');";
			echo "window.location ='list_product_type.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_product_type.php'; ";
			echo "</script>";
		}
		


?>