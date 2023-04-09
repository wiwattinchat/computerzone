<?php include('h.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/50616441.png">
    <style type="text/css">
    input[type=number]{
    width:40px;
    text-align:center;
    color:red;
    font-weight:600;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <?php include('banner.php');?>
      </div>
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <?php include('navbar.php');?>
        </div>
      </div>
    </div>
    <!--start show  product-->
    <div class="container">
      <div class="row">
        <!-- categories-->
        <div class="col-md-2 hidden-xs">
          <?php include('category.php');?>
          <br />
          <div class="panel panel-info">
            <div class="panel-heading">ข่าวล่าสุด</div>
          </div>
          <?php include('list_news_index.php');?>
        </div>
        <!-- cart-->
          <div class="col-md-3  col-xs-12 hidden-md hidden-sm hidden-lg">
            <?php
            //include('cart.php');
            ?>
            <br /><hr />
            <div class="panel panel-success hidden-xs">
              <div class="panel-heading"> สินค้าแนะนำ </div>
            </div>
            <span class="hidden-xs">
            <?php  include('listprd_by_view.php');?>
            
            <br /><br /><br />

            <hr />
            <a href="http://track.thailandpost.co.th/tracking/default.aspx" target="_blank">
              <img src="img/ems.png" width="100%">
            </a>
          </span>
            
          </div>
        <!-- product-->
        <div class="col-md-7 col-xs-12">
          <div class="panel panel-info">
            <div class="panel-heading"> รายการสินค้า
              <a href="product.php" class="btn btn-info btn-xs"> ทั้งหมด </a>  </div>
            </div>
            
            <?php
            
            $t_id = $_GET['t_id'];
            $q = $_GET['q'];
            if($t_id !=''){
              include('listprd_by_type.php');
            }else if($q!=''){
              include('listprd_by_q.php');
            }else{
              include('listprd.php');
            }
            ?>
          </div>
          
          <!-- cart-->
          <div class="col-md-3 hidden-xs">
            <?php
            include('cart.php');
            ?>
            <br /><hr />
            <div class="panel panel-success">
              <div class="panel-heading"> สินค้าแนะนำ </div>
            </div>
            <?php  include('listprd_by_view.php');?>
            
            <br /><br /><br />
            <hr />
            <a href="http://track.thailandpost.co.th/tracking/default.aspx" target="_blank">
              <img src="img/ems.png" width="100%">
            </a>
            
          </div>
        </div>
        
      </div>
      <!--end show  product-->
    </body>
  </html>
  
  <?php  include('f.php');?>