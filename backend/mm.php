<?php
$query_mm ="SELECT * FROM tbl_admin WHERE admin_id =$admin_id";
$mm = mysqli_query($condb, $query_mm);
$row_mm = mysqli_fetch_assoc($mm);
echo $row_mm['admin_name'];
?>
