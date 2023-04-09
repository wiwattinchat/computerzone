<?php require_once('Connections/condb.php');
$query_listnews = "SELECT * FROM tbl_news ORDER BY n_id DESC";
$listnews = mysqli_query($condb, $query_listnews);
$row_listnews = mysqli_fetch_assoc($listnews);
?>
<?php include('h.php');?>
          <table id="example" class="table table-hover" cellspacing="0" border="0">
		<thead>
            <tr class="success">
              <th width="5%" height="40"><center>
                ภาพข่าว
              </center> </th>
              <th width="60%">รายละเอียดข่าว</th>
            </tr>
        </thead>
            <?php $i=1; do { ?>
              <tr>
                <td valign="top">
				<center> <img src="nimg/<?php echo $row_listnews['n_img'];?>" width="80px" />
				</center>
                </td>
                <td>
                <b>
				 <a href="news.php?n_id=<?php echo $row_listnews['n_id'];?>&news-detail"> <?php echo $row_listnews['n_title']; ?>
                 <span class="glyphicon glyphicon-search"></span>
                 </a>
                </b>
               <br>
                 ว/ด/ป : 
                 
                 <?php echo date('d/m/Y' , strtotime($row_listnews['date_save'])); ?>

                </td>
              </tr>
              <?php $i++; } while ($row_listnews = mysqli_fetch_assoc($listnews)); ?>
          </table>
        </div>
    </div>
 </div> 
 
 