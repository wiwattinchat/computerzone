<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');
$n_id = $_GET['n_id'];
$sql ="DELETE FROM tbl_news WHERE n_id=$n_id";
		
		$result = mysqli_query($condb, $sql);
 

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "window.location ='list_news.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_news.php'; ";
			echo "</script>";
		}
		


?>