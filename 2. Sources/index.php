
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/images/fav.png" type="image/x-icon"/>

    <title>Ôn thi trắc nghiệm môn công nghệ Web</title>
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/mestyles.css">
    <link rel="stylesheet" href="./assets/fonts/ionicons.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <link href="./assets/css/aos.css" rel="stylesheet">
    <script src="assets/js/aos.js"></script>

    <script src="assets/js/chinh.js"></script>

    <link rel="stylesheet" href="./assets/css/indexchinh.css">


    <link rel="stylesheet" href="./assets/css/newlogin.css">
    <link rel="stylesheet" href="./assets/css/indexloginchinh.css.css">
    <?php if(@$_GET['w'])
    {echo'<script>alert("'.@$_GET['w'].'");</script>';}
    ?>

</head>

<body>

<div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="#">Thi </a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                 id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Trang chủ</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Các bộ đề</a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Tiện ích </a>
                        <div class="dropdown-menu" role="menu">


                            <a class="dropdown-item" role="presentation" href="#">Các dạng đề thi</a>
                            <a class="dropdown-item" role="presentation" href="#">Đề thi mẫu cuối kì</a>
                            <a class="dropdown-item" role="presentation" href="#">Chia sẻ kinh nghiệm</a></div>
                    </li>
                </ul><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Đăng nhập</button>
                <span><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Đăng ký</button></span></div>
        </div>
    </nav>
</div>
<!-- <marquee>Cùng ôn thi giữa kì môn Công nghệ Web</marquee> -->
<!--sign in modal start-->
<div id="id01" class="modal">

    <form class="modal-content animate" action="login.php" method="POST">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="./assets/images/fav.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Email:</b></label>

            <input type="text" placeholder="Nhập email: " name="email" required>

            <label for="psw"><b>Mật khẩu:</b></label>
            <input type="password" placeholder="Nhập mật khẩu: " name="password" required>

            <button type="submit">Đăng nhập</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Lưu tài khoản
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Quay về trang chủ</button>
            <span class="psw"> <a href="#">Quên mật khẩu?</a></span>
        </div>
    </form>
</div>

<div id="id02" class="modal">
    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" action="sign.php" method="POST">
        <div class="container">
            <h1>Đăng kí</h1>
            <p>Mời bạn nhập thông tin</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Nhập Email của bạn: " name="email" required>
            <br>

            <label for="psw"><b>Mật khẩu</b></label>
            <input type="password" placeholder="Nhập mật khẩu:" name="password" required>

            <label for="psw-repeat"><b>Nhập lại mật khẩu</b></label>
            <input type="password" placeholder="Nhập lại mật khẩu:" name="password-repeat" required>

            <label for="psw-repeat"><b>Họ Tên:</b></label>
            <input type="text" placeholder="Họ tên của bạn:" name="name" required>

            <label for="psw-repeat"><b>Giới tính:</b></label><br>
            <input type="radio" name="gender" value="Nam"> Nam<br>
            <input type="radio" name="gender" value="Nữ"> Nữ<br>
            <input type="radio" name="gender" value="Khác"> Khác<br>

            <label for="psw-repeat"><b>Lớp:</b></label>
            <input type="text" placeholder="Lớp bạn đang học:" name="college">

            <label for="psw-repeat"><b>SĐT</b></label>
            <input type="tel" name="mob">
            <br>
            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
            </label>

            <p>Chấp nhận <a href="#" style="color:dodgerblue">Điều khoản & Chính sách</a>.</p>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Hủy</button>
                <button type="submit" class="signupbtn">Đăng kí</button>
            </div>
        </div>
    </form>
</div>






<!--- Start Slider --->
<Section id="slider">
    <div class="slider-container">
        <!-- Start Slides -->
        <div id="slides">
            <div class="slide">
                <img class="imgs" src="./assets/images/slider1n.jpg" alt="slide one">
                <div class="caption">
                    <p>
                        HTML CSS
                    </p>
                </div>
            </div>
            <div class="slide">
                <img class="imgs" src="./assets/images/slider2n.jpg" alt="slide two">
                <div class="caption">
                    <p>
                        PHP
                    </p>
                </div>
            </div>
            <div class="slide">
                <img class="imgs" src="./assets/images/slider3n.jpg" alt="slide three">
                <div class="caption">
                    <p>
                        JavaScript
                    </p>
                </div>
            </div>
        </div>
        <!-- End Slides -->

        <!-- Start Timeline -->
        <span class="timeline"></span>
        <!-- End Timeline -->
    </div>
</Section>
<!--- End Slider --->












<div data-aos="fade-up">

    <div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Đội ngũ </h2>
                <p class="text-center">Thiết kế & Phát triển</p>
            </div>
            <div class="row people">

                <div class="col-md-6 col-lg-6 item" data-aos="fade-left">
                    <div class="box"><img class="rounded-circle" src="assets/images/hieu.jpg">
                        <h3 class="name">Hiếu</h3>
                        <p class="title">Thiết kế</p>
                        <p class="description"></p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 item " data-aos="fade-right">
                    <div class="box"><img class="rounded-circle" src="assets/images/chinh.jpg">
                        <h3 class="name">Chính</h3>
                        <p class="title">Phát triển</p>
                        <p class="description"></p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>


                <!-- <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="assets/img/3.jpg">
                        <h3 class="name">Carl Kent</h3>
                        <p class="title">Stylist</p>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<div class="footer-basic" data-aos="zoom-in">
    <footer>
        <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Trang chủ</a></li>
            <li class="list-inline-item"><a href="#">Hỗ trợ</a></li>
            <li class="list-inline-item"><a href="#">Giới thiệu</a></li>
            <li class="list-inline-item"><a href="#">Điều kiện</a></li>
            <li class="list-inline-item"><a href="#">Chính sách</a></li>
        </ul>
        <p class="copyright">Bài tập lớn Công nghệ Web © 2018</p>
    </footer>
</div>

<script>AOS.init();</script>
<script src="assets/js/indexchinh.js"></script>
<script src="assets/js/loginchinh.js"></script>
</body>
</html>