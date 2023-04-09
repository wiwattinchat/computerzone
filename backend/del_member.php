<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');

$mem_id = $_GET['mem_id'];



$sql ="DELETE FROM tbl_member WHERE mem_id=$mem_id";
		
		$result = mysqli_query($condb, $sql);
 

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "window.location ='list_member.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_member.php'; ";
			echo "</script>";
		}
		


?>