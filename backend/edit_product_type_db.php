<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');
$t_id = $_POST['t_id'];
$t_name = $_POST['t_name'];


$sql ="UPDATE tbl_type SET	 
		t_name='$t_name'
		WHERE t_id=$t_id
	 ";
		
		$result = mysqli_query($condb, $sql);
//  echo $sql;
// exit();
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