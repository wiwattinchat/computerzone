<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');
  $a_ans = $_POST['a_ans'];
  $a_ans_date = date('Y-m-d');
  $b_id = $_POST['b_id'];
  

  $sql ="UPDATE tbl_board SET 
		
		a_ans='$a_ans', 
		a_ans_date='$a_ans_date'
		WHERE b_id=$b_id
		";
		
		$result = mysqli_query($condb, $sql);

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "alert('ตอบคำถามเรียบร้อยแล้ว');";
			echo "window.location ='list_board.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_board.php'; ";
			echo "</script>";
		}
		


?>