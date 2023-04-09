<?php
$query_typeprd = "SELECT * FROM tbl_type ORDER BY t_id ASC";
$typeprd = mysqli_query($condb, $query_typeprd);
$row_typeprd = mysqli_fetch_assoc($typeprd);
 
?>

<div class="list-group">
              <a href="index.php" class="list-group-item active">หมวดสินค้า</a>
              
<?php do { ?>
                <a href="index.php?t_id=<?php echo $row_typeprd['t_id'];?>&type-name=<?php echo $row_typeprd['t_name'];?>" class="list-group-item"> <?php echo $row_typeprd['t_name']; ?></a>
<?php } while ($row_typeprd = mysqli_fetch_assoc($typeprd)); ?>
                        
</div>
 
