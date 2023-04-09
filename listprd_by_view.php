<?php
$query_prd = "SELECT * FROM tbl_product ORDER BY p_view DESC LIMIT 0 , 4";
$prd = mysqli_query($condb, $query_prd);
$row_prdv = mysqli_fetch_assoc($prd);
 
?>
<?php do { ?>
  <div class="col-sm-6" align="center">
     <a href="product-detail.php?p_id=<?php echo $row_prdv['p_id'];?>&act=product-detail" target="_blank">
    <img src="pimg/<?php echo $row_prdv['p_img1'];?>" width="100%"/>
  </a> 
    <p align="center">
        <?php 
    $p_name =  $row_prdv['p_name'];
    if(strlen($p_name) > 15){
      echo mb_substr($p_name, 0, 10).'...';
    }else{
      echo $p_name;
    }
     ?> 
        <br />
       <font color="red">  
	  <?php echo $row_prdv['p_price']; ?>  บาท </font>  
      <br />
      </p>
    </div>
  <?php } while ($row_prdv = mysqli_fetch_assoc($prd)); ?>
 