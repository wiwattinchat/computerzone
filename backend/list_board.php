<?php include('access.php');
$query_rb = "SELECT * FROM tbl_board order by b_id desc";
$rb = mysqli_query($condb, $query_rb);
$row_rb = mysqli_fetch_assoc($rb);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('h.php');?>
    <?php include('datatable.php');?>
  </head>
  <body>
  <div class="container">
  <div class="row">
         <?php include('banner.php');?>
   </div>
  	<div class="row">
    	<div class="col-md-2">
        <b>  ADMIN : <?php include('mm.php');?> </b>
        <br>
        <?php include('menu.php');?>        	 
      </div>
        <div class="col-md-10">
        <h3 align="center"> รายการบอร์ด </h3>
          <table border="1" align="center" class="table table-hover">
                  <tr class="success">
                    <td width="5%">ID</td>
                    <td width="40%">คำถาม</td>
                    <td width="10%">ผู้ถาม</td>
                    <td width="5%">คำตอบ</td>
                    <td width="10%">หมายเหตุ</td>
                    <td width="10%">ว/ด/ป</td>
                  </tr>
                  <?php do { ?>
                    <tr>
                      <td><?php echo $row_rb['b_id']; ?></td>
                      <td><?php echo $row_rb['b_title']; ?></td>
                      <td><?php echo $row_rb['b_name']; ?></td>
                      <td> 
                        <a href="list_board_detail.php?b_id=<?php echo $row_rb['b_id'];?>&board-detial" class="btn btn-info btn-xs" target="_blank">ตอบกระทู้</a> 
                      </td>
                      <td>
                        <?php 
                        $chk = $row_rb['a_ans']; 

                        if($chk!=''){
                          echo 'ตอบแล้ว';
                        }else{
                          echo '<font color="red">';
                          echo 'ยังไม่ตอบ';
                          echo '</font>';
                        }

                        ?>
                          
                        </td>
                      
                      <td><?php echo date('d/m/Y',strtotime($row_rb['date_save'])); ?></td>
                    </tr>
                    <?php } while ($row_rb = mysqli_fetch_assoc($rb)); ?>
                </table>
        </div>
    </div>
 </div> 
  </body>
</html>
<?php  include('f.php');?>