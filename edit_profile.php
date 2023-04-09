<?php   
//$mem_id=1;
$query_editm = "SELECT * FROM tbl_member WHERE mem_id = $mem_id";
$editm = mysqli_query($condb, $query_editm);
$row_editm = mysqli_fetch_assoc($editm);
?>

 
        <h3 align="center">  แก้ไขสมาชิก  <?php include('backend/edit-ok.php');?> </h3>
			<form  name="register" action="edit_profile_db.php" method="POST" id="register" class="form-horizontal">
       <div class="form-group">
       <div class="col-sm-2">  </div>
       <div class="col-sm-5" align="left">
       <font color="red"> *กรุณากรอกข้อมูลให้ครบทุกช่อง </font>
       </div>
       </div>
       <div class="form-group">
       	<div class="col-sm-2" align="right"> Username : </div>
          <div class="col-sm-5" align="left">
            <input  name="mem_username" type="text" disabled class="form-control" id="mem_username" value="<?php echo $row_editm['mem_username']; ?>" minlength="2"  />
          </div>
      </div>
        
        <div class="form-group">
        <div class="col-sm-2" align="right"> Password : </div>
          <div class="col-sm-5" align="left">
            <input  name="mem_password" type="password" required class="form-control" id="mem_password" placeholder="password" pattern="^[a-zA-Z0-9]+$" value="<?php echo $row_editm['mem_password']; ?>" minlength="2" />
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-2" align="right"> ชื่อ-สกุล : </div>
          <div class="col-sm-7" align="left">
            <input  name="mem_name" type="text" required class="form-control" id="mem_name" placeholder="ชื่อ-สกุล" value="<?php echo $row_editm['mem_name']; ?>" />
          </div>
        </div>
        
  
        <div class="form-group">
        <div class="col-sm-2" align="right"> อีเมล์ : </div>
          <div class="col-sm-6" align="left">
            <input  name="mem_email" type="email" class="form-control" id="mem_email"   placeholder="อีเมล์" value="<?php echo $row_editm['mem_email']; ?>"/>
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-2" align="right"> เบอร์โทร : </div>
          <div class="col-sm-6" align="left">
            <input  name="mem_tel" type="text" class="form-control" id="mem_tel"  placeholder="เบอร์โทร" value="<?php echo $row_editm['mem_tel']; ?>" />
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-2" align="right"> ที่อยู่ : </div>
          <div class="col-sm-6" align="left">
            <textarea name="mem_address" class="form-control" id="mem_address" required><?php echo $row_editm['mem_address']; ?></textarea> 
          </div>
        </div>
      <div class="form-group">
      <div class="col-sm-2"> </div>
          <div class="col-sm-6">
          <button type="submit" class="btn btn-primary" id="btn">  บันทึก   </button>
          <input name="mem_id" type="hidden" id="mem_id" value="<?php echo $row_editm['mem_id']; ?>">
          <input name="do" type="hidden" id="do" value="edit-profile">
          </div>
           
      </div>
      </form>        
