<?php 
session_start();
//$_SESSION['mem_id']=1;
require_once('Connections/condb.php'); 
$mem_id=$_SESSION['mem_id'];
if(isset($_SESSION['mem_id']) && $mem_id > 0){
$query_mlogin = "SELECT * FROM tbl_member WHERE mem_id =$mem_id";
$mlogin = mysqli_query($condb, $query_mlogin);
$row_mlogin = mysqli_fetch_assoc($mlogin);
}
?>    
    
    <title> บริษัท คอมพิวเตอร์โซน ซิสเต็มท์ บิวเดอร์ จำกัด </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link  href="css/style.css" rel="stylesheet" />