<?php include('h.php');  
$query_pf = "SELECT * FROM tbl_member WHERE mem_id =$mem_id";
$pf = mysqli_query($condb, $query_pf);
$row_pf = mysqli_fetch_assoc($pf);
$totalRows_pf = mysqli_num_rows($pf);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php include('datatable.php');?>
    <style type="text/css">
      @media print{
      #hp{
        display:none;
      }
    }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <span id="hp">
          <?php include('banner.php');?>
        </span>
      </div>
      <div class="row">
        <div class="col-md-12" id="hp">
          <?php include('navbar.php');?>
        </div>
      </div>
    </div>
    <!--start show  product-->
    <div class="container">
      <div class="row">
        <!-- menu-->
        <div class="col-md-3" id="hp">
          <?php include('m_menu.php');?>
        </div>
        <!-- content-->
        <div class="col-md-1"></div>
        <div class="col-md-8">
          <?php
              $page = $_GET['page'];
              if($page=='mycart'){
                include('mycart.php');
              }else{
              include('detail_order_afer_cartdone.php');
              }
              
          ?>
          
          
          
        </div>
      </div>
    </div>
    <!--end show  product-->
    
    
    
    
    
  </body>
</html>
<?php  include('f2.php');?>