<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');
$admin_id = $_GET['admin_id'];

$sql ="DELETE FROM tbl_admin WHERE admin_id=$admin_id";
		
		$result = mysqli_query($condb, $sql);
 

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "window.location ='list_admin.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_admin.php'; ";
			echo "</script>";
		}
		


?>