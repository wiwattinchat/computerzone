<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');

$admin_user = $_POST['admin_user'];
$admin_pass = $_POST['admin_pass'];
$admin_name = $_POST['admin_name'];


$check ="SELECT * FROM tbl_admin  WHERE admin_user='$admin_user'";
$result1=mysqli_query($condb, $check);
$num=mysqli_num_rows($result1);

if($num > 0)
{
			echo "<script>";
			echo "alert('user นีมีผู้ใช้แล้ว กรุณาสมัครใหม่อีกครั้ง');";
			echo "window.location ='add_admin.php'; ";
			echo "</script>";

} else {


$sql ="INSERT INTO tbl_admin
		
		(admin_user,  admin_pass, admin_name)
		
		VALUES
		
		('$admin_user', '$admin_pass', '$admin_name')";
		
		$result = mysqli_query($condb, $sql);
}

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "alert('เพิ่ม admin เรียบร้อยแล้ว');";
			echo "window.location ='list_admin.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_admin'; ";
			echo "</script>";
		}
		


?>