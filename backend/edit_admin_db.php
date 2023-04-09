<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');
$admin_id = $_POST['admin_id'];
$admin_pass = $_POST['admin_pass'];
$admin_name = $_POST['admin_name'];
 

$sql ="UPDATE tbl_admin SET 
			admin_name='$admin_name',
		  	admin_pass='$admin_pass'			
			WHERE admin_id=$admin_id
			";
		
		$result = mysqli_query($condb, $sql);
 

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "window.location ='edit_admin.php?admin_id=$admin_id&act=edit-ok'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_admin'; ";
			echo "</script>";
		}
		


?>