<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');

$t_id = $_GET['t_id'];

$sql ="DELETE FROM tbl_type WHERE t_id=$t_id";
		
		$result = mysqli_query($condb, $sql);
 

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "window.location ='list_product_type.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_product_type.php'; ";
			echo "</script>";
		}
		


?>