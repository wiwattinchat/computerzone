<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');

$b_id = $_GET['b_id'];



$sql ="DELETE FROM tbl_bank WHERE b_id=$b_id";
		
		$result = mysqli_query($condb, $sql);
 

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "window.location ='list_bank.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_bank.php'; ";
			echo "</script>";
		}
		


?>