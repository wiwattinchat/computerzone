<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');

$mem_id = $_POST['mem_id'];
$mem_password = $_POST['mem_password'];
$mem_name = $_POST['mem_name'];
$mem_email = $_POST['mem_email'];
$mem_tel = $_POST['mem_tel'];
$mem_address = $_POST['mem_address'];
 

$sql ="UPDATE  tbl_member SET
		mem_password='$mem_password',
		mem_name='$mem_name',
		mem_email='$mem_email',
		mem_tel='$mem_tel',
		mem_address='$mem_address'
		
		WHERE mem_id=$mem_id ";
		
		$result = mysqli_query($condb, $sql);
 

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "window.location ='edit_member.php?mem_id=$mem_id&act=edit-ok'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_member.php'; ";
			echo "</script>";
		}
		


?>