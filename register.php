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
    	<div class="col-md-12">
        	<?php include('navbar.php');?>
        </div>
    </div>
 </div>
 
 
 <div class="container">
	<div class="row">
    <div class="col-md-2 hidden-xs">
      <div class="panel panel-info">
            <div class="panel-heading">ข่าวล่าสุด</div>
          </div>
          <?php include('list_news_index.php');?> 
    </div>
		<div class="col-md-7 col-xs-12">
   
    <form  name="register" action="register_db.php" method="POST" id="register" class="form-horizontal">
       <div class="form-group">
       <div class="col-sm-2">  </div>
       <div class="col-sm-5" align="left">
       <br>
       <h4> สมัครสมาชิก </h4>
       <font color="red"> *กรุณากรอกข้อมูลให้ครบทุกช่อง </font>
       </div>
       </div>
       <div class="form-group">
       	<div class="col-sm-2" > Username : </div>
          <div class="col-sm-5" align="left">
            <input  name="mem_username" type="text" required class="form-control" id="mem_username" placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
          </div>
      </div>
        
        <div class="form-group">
        <div class="col-sm-2" > Password : </div>
          <div class="col-sm-5" align="left">
            <input  name="mem_password" type="password" required class="form-control" id="mem_password" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-2" > ชื่อ-สกุล : </div>
          <div class="col-sm-7" align="left">
            <input  name="mem_name" type="text" required class="form-control" id="mem_name" placeholder="ชื่อ-สกุล" />
          </div>
        </div>
        
  
        <div class="form-group">
        <div class="col-sm-2" > อีเมล์ : </div>
          <div class="col-sm-6" align="left">
            <input  name="mem_email" type="email" class="form-control" id="mem_email"   placeholder="อีเมล์"/>
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-2" > เบอร์โทร : </div>
          <div class="col-sm-6" align="left">
            <input  name="mem_tel" type="text" class="form-control" id="mem_tel"  placeholder="เบอร์โทร" />
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-2" > ที่อยู่ : </div>
          <div class="col-sm-6" align="left">
            <textarea name="mem_address" class="form-control" id="mem_address" required></textarea> 
          </div>
        </div>
      <div class="form-group">
      <div class="col-sm-2"> </div>
          <div class="col-sm-6">
          <button type="submit" class="btn btn-primary" id="btn">  สมัครสมาชิก  </button>
          </div>
           
      </div>
      </form>
</div>
<div class="col-md-3 hidden-xs">
      <div class="panel panel-success">
              <div class="panel-heading"> สินค้าแนะนำ </div>
            </div>
          <?php  include('listprd_by_view.php');?> 
    </div>
</div>
</div>

 
 
 
 
   
  </body>
</html>
<?php include('f.php');?>