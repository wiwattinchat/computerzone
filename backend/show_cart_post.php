<?php
$query_mycart = "
SELECT 
o.order_id as oid, o.mem_id, o.order_status, o.order_date, o.name,
d.order_id , COUNT(d.order_id) as coid, SUM(d.total) as ctotal
FROM tbl_order  as o, tbl_order_detail as d 
WHERE o.order_id=d.order_id
AND o.order_status=3
GROUP BY o.order_id
ORDER BY o.order_id DESC";
$mycart = mysqli_query($condb, $query_mycart);
$row_mycart = mysqli_fetch_assoc($mycart);
$totalRows_mycart = mysqli_num_rows($mycart);

?>
<?php //include('../datatable.php');?>

<h3 align="center"> ส่งของแล้ว </h3> 
<table id="example" class="display" cellspacing="0" border="1">
<thead>
  <tr>
    <th>รหัสสั่งซื้อ</th>
    <th>ลูกค้า</th>
    <th>จำนวนรายการ</th>
    <th>ราคารวม</th>
    <th>สถานะ</th>
    <th>วันที่ทำรายการ</th>
  </tr>
  </thead>
  <?php if($totalRows_mycart > 0){?>
  <?php do { ?>
    <tr>
      <td>
      
	  <?php echo $row_mycart['oid']; ?>
      <a href="index.php?order_id=<?php echo $row_mycart['oid']; ?>&p=<?php echo $row_mycart['order_status']; ?>&act=show-order" target="_blank">
      <span class="glyphicon glyphicon-zoom-in"></span>
      </a>
      </td>
      <td align="center">
      <?php echo $row_mycart['name'];?>
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
	  include('status.php');
	  
	  ?>  
      </font>
      
      
      </td>
      <td><?php echo $row_mycart['order_date']; ?></td>
    </tr>
    <?php } while ($row_mycart = mysqli_fetch_assoc($mycart)); ?>
    <?php } ?>
</table>
