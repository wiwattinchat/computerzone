<?php  
$query_prd = "SELECT * FROM tbl_product ORDER BY p_id desc";
$prd = mysqli_query($condb, $query_prd);
$row_prd = mysqli_fetch_assoc($prd);
?>
<?php do { ?>
  <div class="col-sm-4" align="center">
    <img src="pimg/<?php echo $row_prd['p_img1'];?>" width="80%" />
    <p align="center">

       <?php 
    $p_name =  $row_prd['p_name'];
    if(strlen($p_name) > 15){
      echo mb_substr($p_name, 0, 15).'...';
    }else{
      echo $p_name;
    }
     ?> 
       <br>
       <font color="red">  
	  <?php echo $row_prd['p_price']; ?>  บาท </font> 
      <br />
	  
  
      <a href="product-detail.php?p_id=<?php echo $row_prd['p_id'];?>&act=product-detail" class="btn btn-info btn-xs" target="_blank"> <span class="glyphicon glyphicon-search"></span> รายละเอียด </a>
      
	 <?php include('outstock.php');?>
        
      <br><br>
      </p>
    </div>
  <?php } while ($row_prd = mysqli_fetch_assoc($prd)); ?>
 