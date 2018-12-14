<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> || THI TRỰC TUYẾN </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main1.css">
 <link  rel="stylesheet" href="css/font.css">
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    <link rel="stylesheet" href="css/Article-List.css">
    <link rel="stylesheet" href="css/Footer-Dark.css">
    <link rel="stylesheet" href="css/Projects-Horizontal.css">
    <link rel="stylesheet" href="css/Team-Clean.css">
    <link rel="stylesheet" href="css/demo.css">
 <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

</head>
<script>
    function validateForm() {
      var y = document.forms["form"]["name"].value;	
      var letters = /^[A-Za-z]+$/;
      if (y == null || y == "") {
        alert("Name must be filled out.");
        return false;
      }
      var z =document.forms["form"]["college"].value;
      if (z == null || z == "") {
        alert("college must be filled out.");
        return false;
      }
      var x = document.forms["form"]["email"].value;
      var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf(".");
      if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address.");
        return false;
      }
      var a = document.forms["form"]["password"].value;
      if(a == null || a == ""){
        alert("Password must be filled out");
        return false;
      }
      if(a.length<5 || a.length>25){
        alert("Passwords must be 5 to 25 characters long.");
        return false;
      }
      var b = document.forms["form"]["cpassword"].value;
      if (a!=b){
        alert("Passwords must match.");
        return false;
      }
    }
    </script>
<body>
<div class="me-header fixed-top">
        <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button me-nav ">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <span>
                        <img src="assets/img/1.jpg" style="width:50px; height: auto;">
                    </span>
                </a>
                <!-- Toggle navigation -->
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav nav-right">
                        <!-- Trang chủ -->
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="feedback.php">TRANG CHỦ </a></li>
                        <!--Liên hệ-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">LIÊN HỆ
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="feedback.php">Thông Tin Nhà Cung Cấp</a>
                              <a class="dropdown-item" href="trang_thanh_toan.html">Thanh Toán</a>
                            </div>
                        </li>
                    </ul>
                    <p class="ml-auto navbar-text actions">
                    <!-- Đăng nhập -->
                        <a href="#" class="btn btn-light" role="button" id="btnDangNhap"> <i class="fa fa-user"></i>Đăng Nhập</a>
                    <!-- Đăng ký -->
                        <a class="btn btn-light" role="button" href="#" id="btnDangKy"><i class="fa fa-sign-in"></i>Đăng Ký</a>
                    </p>
                </div>
            </div>
        </nav>  
    </div>
    
<!-- sign up -->

<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Đăng nhập</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Email" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Mật khẩu" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
        <button type="submit" class="btn btn-primary">Đăng nhập</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="bg1">
<div class="row">



</fieldset>
</form>
</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->

<!--Footer start-->
 <!--Footer-->

<div class="row footer">
<div class="col-md-6 box">
<a href="https://vi.wikipedia.org/wiki/Gi%C3%A1o_d%E1%BB%A5c_tr%E1%BB%B1c_tuy%E1%BA%BFn" target="_blank">Giới thiệu</a>
</div>
<div class="col-md-6 box">
<a href="https://www.facebook.com/dmh98" data-toggle="modal">Nhà sáng lập</a></div>

<!-- Modal For Developers-->




</body>
</html>
