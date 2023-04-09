<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');

$p_id = $_GET['p_id'];

$sql ="DELETE FROM tbl_product WHERE p_id=$p_id";
		
		$result = mysqli_query($condb, $sql);
 

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "window.location ='list_product.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_product.php'; ";
			echo "</script>";
		}
		


?>