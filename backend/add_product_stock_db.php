<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');

//print_r($_POST);

$t_id = $_POST['t_id'];
$p_id = $_POST['p_id'];
$p_qty = $_POST['p_qty'];
$p_stock = $_POST['p_stock'];
$p_total = ($p_qty + $p_stock);

$sql ="UPDATE tbl_product SET	 
		p_qty=$p_total
		WHERE p_id=$p_id
	 ";		
$result = mysqli_query($condb, $sql);
		
 

 
$sql2 ="INSERT INTO tbl_product_stock
		(p_id, p_qty_add)
		VALUES
		('$p_id', '$p_qty')
	 ";		
		$result2 = mysqli_query($condb, $sql2);		
 

		mysqli_close($condb);
		
		if($result){
			echo "<script>";
			echo "alert('เพิ่มจำนวนสินค้าเรียบร้อยแล้ว!');";
			echo "window.location ='add_product_stock.php?p_id=$p_id&t_id=$t_id&act=add-stock'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_product.php'; ";
			echo "</script>";
		}
		


?>