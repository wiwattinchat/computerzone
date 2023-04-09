<?php require_once('Connections/condb.php');
$n_id = $_GET['n_id'];
$query_listnews = "SELECT * FROM tbl_news WHERE n_id=$n_id";
$listnews = mysqli_query($condb, $query_listnews);
$row_listnews = mysqli_fetch_assoc($listnews);

if (mysqli_num_rows($listnews) !=1) {
  exit();
}

?>
<?php include('h.php');?>
<table  class="table table-hover" cellspacing="0" border="0">
  <thead>
    <tr class="success">
      <th width="40%" height="40">รายละเอียดข่าว  / <a href="news.php"> ย้อนกลับ </a> </th>
      <th width="60%">&nbsp;</th>
    </tr>
  </thead>
  
  <tr>
    <td width="30%"><img src="nimg/<?php echo $row_listnews['n_img'];?>" width="100%" /></td>
    <td width="70%" align="left" valign="top"><b> <br />
      หัวข้อข่าว : <?php echo $row_listnews['n_title']; ?> </b> <br />
      <b> รายละเอียดข่าว : </b> <?php echo $row_listnews['n_detail']; ?> <br />
    ว/ด/ป : <?php echo date('d/m/Y' , strtotime($row_listnews['date_save'])); ?></td>
  </tr>
  
</table>
</div>
</div>
</div>