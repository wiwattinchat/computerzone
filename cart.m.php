<?php
    //require_once('Connections/condb.php');
    //session_start(); 
    $p_id = $_GET['p_id']; 
	$act = $_GET['act'];

	if($act=='add' && !empty($p_id))
	{
		if(!isset($_SESSION['shopping_cart']))
		{
			 
			$_SESSION['shopping_cart']=array();
		}else{
		 
		}
		if(isset($_SESSION['shopping_cart'][$p_id]))
		{
			$_SESSION['shopping_cart'][$p_id]++;
		}
		else
		{
			$_SESSION['shopping_cart'][$p_id]=1;
		}
		 //    echo "<script>";
			// echo "window.location ='index.php'; ";
			// echo "</script>";
	}

	if($act=='remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
	{
		unset($_SESSION['shopping_cart'][$p_id]);
	}

	if($act=='update')
	{
		$amount_array = $_POST['amount'];
		foreach($amount_array as $p_id=>$amount)
		{
			$_SESSION['shopping_cart'][$p_id]=$amount;
		}
	}
	?>

      <form id="frmcart" name="frmcart" method="post" action="?act=update" class="form-horizontal">
        <table   border="1" align="center" class="table1 table-hover1">
        <tr>
          <td height="40" colspan="4" align="center" bgcolor="#33CCFF"><strong><b>ตะกร้าสินค้า</strong></td>
        </tr>
        <tr>
          <td><center>สินค้า</center></td>
          <td><center>ราคา</center></td>
          <td><center>จำนวน</center></td>
          <td><center>รวม</center></td>
        </tr>
        <?php

if(!empty($_SESSION['shopping_cart']))
{

	foreach($_SESSION['shopping_cart'] as $p_id=>$p_qty)
	{
		$sql = "select * from tbl_product where p_id=$p_id";
		$query = mysqli_query($condb, $sql);
		while($row = mysqli_fetch_array($query))
		{
		 
		$sum = $row['p_price'] * $p_qty;
		$pqty = $row['p_qty'];
		$total += $sum;
		echo "<tr>";
		echo "<td width='20px'>";
		echo "<img src='pimg/".$row['p_img1']."' width='50'>";
		echo "</td>";
		//echo "<td width='334'>"." " . $row["p_name"] . "</td>";
		echo "<td width='70px' align='right'>" .number_format($row["p_price"]) . "</td>";
		
		echo "<td width='20px' align='right'>";  
		echo "<input type='text' name='amount[$p_id]' value='$p_qty' max='$pqty' size='5'/></td>";
		
		echo "<td width='120' align='right'>";
		echo  number_format($sum). ' &nbsp; ';
		echo "<a href='index.php?p_id=$p_id&act=remove' class='btn btn-danger btn-xs'>x</a>";
		echo "</td>";
		//echo "<td width='100' align='center'><a href='cart.php?p_id=$p_id&act=remove' class='btn btn-danger btn-xs'>ลบ</a></td>";
		
		echo "</tr>";
		}
 
	}
	echo "<tr>";
  	echo "<td colspan='3' bgcolor='#CEE7FF' align='right'>รวม</td>";
  	echo "<td align='right' bgcolor='#CEE7FF'>";
  	echo "<b>";
  	echo  number_format($total,2);
  	echo "</b>";
  	echo "</td>";
  
	echo "</tr>";
}
?>
          </table>
       <p align="right">   
        <?php if($total > 0){ ?>
          <td colspan="3" align="right">
          <button type="submit" name="button" id="button" class="btn btn-warning"> คำนวณ </button>
          <?php $chk = $_GET['act'];
		      if($chk=='update'){?>
            <button type="button" name="Submit2"  onclick="window.location='confirm_order.php';" class="btn btn-primary"> 
            <span class="glyphicon glyphicon-shopping-cart"> </span> สั่งซื้อ </button>
               <?php }else{ }?>
            </td>
            <?php }else { 
			echo "<font color='red'>";
			echo "ไม่มีรายการสั่งซื้อ";
			echo "</font>";
			} ?>
          </p>
      </form>
 
 