<?php
$query_mm = "SELECT * FROM tbl_member WHERE mem_id = $mem_id";
$mm = mysqli_query($condb, $query_mm);
$row_mm = mysqli_fetch_assoc($mm);
$totalRows_mm = mysqli_num_rows($mm);

$query_mycart = "
SELECT 
o.order_id as oid, o.mem_id, o.order_status, o.order_date,
d.order_id , COUNT(d.order_id) as coid, SUM(d.total) as ctotal
FROM tbl_order  as o, tbl_order_detail as d
WHERE o.mem_id =$mem_id 
AND o.order_id=d.order_id
GROUP BY o.order_id
ORDER BY o.order_id DESC";
$mycart = mysqli_query($condb, $query_mycart);
$row_mycart = mysqli_fetch_assoc($mycart);
$totalRows_mycart = mysqli_num_rows($mycart);

?>
 

 <p align="center"> <button class="btn btn-primary btn-sm" onclick="window.print()"> พิมพ์ </button>  </p>
 
<table id="example" class="display" cellspacing="0" border="1">
<thead>
  <tr>
    <th>รหัสสั่งซื้อ</th>
    <th>จำนวนรายการ</th>
    <th>ราคารวม</th>
    <th>สถานะ</th>
    <th>วันที่ทำรายการ</th>
  </tr>
  </thead>
  <?php if($totalRows_mycart>0){ do { ?>
    <tr>
      <td>
      
	  <?php echo $row_mycart['oid']; ?>
      <span id="hp">
      <a href="my_order.php?order_id=<?php echo $row_mycart['oid']; ?>&act=show-order">
      <span class="glyphicon glyphicon-zoom-in"></span>
      </a>
      </span>
      </td>
      <td align="center">
      <?php echo $row_mycart['coid'];?>
      </td>
       <td align="center">
      <?php echo number_format($row_mycart['ctotal'],2);?>
      </td>
      <td align="center">
      <font color="red">
      <?php 
	  $status =  $row_mycart['order_status'];
	 include('backend/status.php');
	  ?>  
      </font>
      
      
      </td>
      <td><?php echo $row_mycart['order_date']; ?></td>
    </tr>
    <?php } while ($row_mycart = mysqli_fetch_assoc($mycart)); } ?>
</table>

