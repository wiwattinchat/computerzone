<?php include('h.php');
$query_rb = "SELECT * FROM tbl_board WHERE a_ans !='' order by b_id desc";
$rb = mysqli_query($condb, $query_rb);
$row_rb = mysqli_fetch_assoc($rb);
$numb = mysqli_num_rows($rb);
?>

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
         <?php 
         include('datatable.php');
         include('banner.php');
         ?>
   </div>
  	<div class="row">
    	<div class="col-md-12">
    	  <?php include('navbar.php');?>
    	</div>
    </div>
 </div> 
 
 <div class="container">
 	<div class="row">
    	 <div class="col-md-2">
          <div class="panel panel-info">
            <div class="panel-heading">ข่าวล่าสุด</div>
          </div>
          <?php include('list_news_index.php');?> 


        </div>
      <div class="col-md-10">
         <div class="panel panel-danger">
            <div class="panel-heading">
            <h4> ถาม-ตอบ  ||
            <a href="board_form.php?act=form" class="btn btn-success btn-xs"> +คำถาม </a>
             </h4> 
             </div>
            </div>


                <table border="0"  id="example" class="table table-hover">
                 <thead>
                  <tr class="success">
                    <th width="5%">No.</td>
                    <th width="50%">คำถาม</td>
                    <th width="20%">ผู้ถาม</td>
                    <th width="5%">-</td>
                    <th width="10%">ว/ด/ป</td>
                  </tr>
                </thead>
                  <?php if($numb > 0){ do { ?>
                    <tr>
                      <td align="center"><?php echo $row_rb['b_id']; ?></td>
                      <td><?php echo $row_rb['b_title']; ?></td>
                      <td><?php echo $row_rb['b_name']; ?></td>
                      <td> 
                        <a href="board_detail.php?b_id=<?php echo $row_rb['b_id'];?>&board-detial" class="btn btn-info btn-xs">ดูคำตอบ</a> 
                      </td>
                      <td><?php echo date('d/m/Y',strtotime($row_rb['date_save'])); ?></td>
                    </tr>
                    <?php } while ($row_rb = mysqli_fetch_assoc($rb)); }?>
                </table>
        </div>
    </div>
</div>
  </body>
</html>
<?php include('f.php');?>