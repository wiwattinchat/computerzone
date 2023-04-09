<?php
$query_listnews = "SELECT * FROM tbl_news ORDER BY n_id DESC limit 3";
$listnews = mysqli_query($condb, $query_listnews);
$row_listnews = mysqli_fetch_assoc($listnews);
?>
<table id="example1" class="table table-hover" cellspacing="0" border="0">
  <?php $i=1; do { ?>
  <tr>
    <td valign="top">
      <a href="news.php?n_id=<?php echo $row_listnews['n_id'];?>&news-detail" target="_blank">
        <center> 
          <?php 
    $n_title =  $row_listnews['n_title'];
    if(strlen($n_title) > 15){
      echo mb_substr($n_title, 0, 15).'...';
    }else{
      echo $n_title;
    }
     ?> 
          <img src="nimg/<?php echo $row_listnews['n_img'];?>" width="100%" />
        </center>
      </a>
    </td>
  </tr>
  <?php $i++; } while ($row_listnews = mysqli_fetch_assoc($listnews)); ?>
</table>