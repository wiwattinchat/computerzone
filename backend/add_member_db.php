<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');

$mem_username = $_POST['mem_username'];
$mem_password = $_POST['mem_password'];
$mem_name = $_POST['mem_name'];
$mem_email = $_POST['mem_email'];
$mem_tel = $_POST['mem_tel'];
$mem_address = $_POST['mem_address'];

$check ="SELECT * FROM tbl_member  WHERE mem_username='$mem_username'";
$result1=mysqli_query($condb, $check);
$num=mysqli_num_rows($result1);

if($num > 0)
{
			echo "<script>";
			echo "alert('user นีมีผู้ใช้แล้ว กรุณาสมัครใหม่อีกครั้ง');";
			echo "window.location ='list_member.php'; ";
			echo "</script>";

} else {


$sql ="INSERT INTO tbl_member
		
		(mem_username,  mem_password, mem_name, mem_email, mem_tel, mem_address)
		
		VALUES
		
		('$mem_username', '$mem_password', '$mem_name', '$mem_email', '$mem_tel', '$mem_address')";
		
		$result = mysqli_query($condb, $sql);
}

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "alert('เพิ่มสมาชิกเรียบร้อยแล้ว');";
			echo "window.location ='list_member.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_member.php'; ";
			echo "</script>";
		}
		


?>