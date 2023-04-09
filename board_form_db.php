<meta charset="UTF-8" />
<?php
include('Connections/condb.php');
  $b_title = $_POST['b_title'];
  $b_detail = $_POST['b_detail'];
  $b_name = $_POST['b_name'];
  $b_email = $_POST['b_email'];

  $sql ="INSERT INTO tbl_board
		
		(
		b_title,
		b_detail,
		b_name,
		b_email
		)
		VALUES	
		(
		'$b_title',
		'$b_detail',
		'$b_name',
		'$b_email'
		)";
		
		$result = mysqli_query($condb, $sql);

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "alert('ขอบคุณครับ กรุณารอการอนุมัติจาก admin ');";
			echo "window.location ='board.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='index.php'; ";
			echo "</script>";
		}
		


?>