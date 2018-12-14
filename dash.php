<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Quản lí đề thi </title>
  <link rel="icon" href="./assets/images/fav.png" type="image/x-icon"/>
  <link  rel="stylesheet" href="./assets/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="./assets/css/dash.css"> 
 
  <script src="./assets/js/jquery.min.js" type="text/javascript"></script>
  
  <script src="./assets/js/bootstrap.min.js"  type="text/javascript"></script>
 	
  <!-- <script>
    $(function () {
        $(document).on( 'scroll', function(){
            console.log('scroll top : ' + $(window).scrollTop());
            if($(window).scrollTop()>=$(".logo").height())
            {
                 $(".navbar").addClass("navbar-fixed-top");
            }
    
            if($(window).scrollTop()<$(".logo").height())
            {
                 $(".navbar").removeClass("navbar-fixed-top");
            }
        });
    });</script> -->
</head>
<body>

<div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="#">Quản lý</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Trang chủ</a></li>
                            <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Thao tác </a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                            </li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field"></div>
                        </form><span class="navbar-text"><a href="#" class="login">Thông tin</a></span><a class="btn btn-light action-button" role="button" href="#">Đăng xuất</a></div>
                </div>
            </nav>
            <div class="container hero">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h1 class="text-center">Danh sách các bài thi.</h1>
                        <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item"></iframe></div>
                    </div>
                </div>
            </div>
        </div>
    </div>












        <div class="header">
        <div class="row">
        <div class="col-lg-6">
        <span class="logo">Quản lý</span></div>
        <?php
         include_once 'dbConnection.php';
        session_start();
        $email=$_SESSION['email'];
          if(!(isset($_SESSION['email']))){
        header("location:index.php");
        
        }
        else
        {
        $name = $_SESSION['name'];
        
        include_once 'dbConnection.php';
        echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Xin chào,</span> <a href="account.php" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="index.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Đăng xuất</button></a></span>';
        }?>
        
        </div></div>
        <!-- admin start-->
        
        <!--navigation menu-->
        <nav class="navbar navbar-default title1">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Thanh</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li <?php if(@$_GET['q']==0) echo'class="active"'; ?>><a href="dash.php?q=0">Trang chủ<span class="sr-only">(Hiện tại)</span></a></li>
                <li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="dash.php?q=1">Người dùng</a></li>
            <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="dash.php?q=2">Xếp hạng</a></li>
            <li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="dash.php?q=3">Phản hồi</a></li>
                <li class="dropdown <?php if(@$_GET['q']==4 || @$_GET['q']==5) echo'active"'; ?>">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bộ đề<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="dash.php?q=4">Thêm bộ đề thi</a></li>
                    <li><a href="dash.php?q=5">Xóa bộ đề thi</a></li>
                  </ul>
                </li>
              </ul>
                  </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <!--navigation menu closed-->
        <div class="container"><!--container start-->
        <div class="row">
        <div class="col-md-12">
        <!--home start-->
        
        <?php if(@$_GET['q']==0) {
        
        $result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
        echo  '<div class="panel"><table class="table table-striped title1">
        <tr><td><b>STT</b></td><td><b>Nội dung</b></td><td><b>Tổng số câu</b></td><td><b>Điểm tối đa</b></td><td><b>Thời gian</b></td><td></td></tr>';
        $c=1;
        while($row = mysqli_fetch_array($result)) {
          $title = $row['title'];
          $total = $row['total'];
          $sahi = $row['sahi'];
            $time = $row['time'];
          $eid = $row['eid'];
        $q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
        $rowcount=mysqli_num_rows($q12);	
        if($rowcount == 0){
          echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
          <td><b><a href="account.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b></td></tr>';
        }
        else
        {
        echo '<tr style="color:#99cc32"><td>'.$c++.'</td><td>'.$title.'&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
          <td><b><a href="update.php?q=quizre&step=25&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Restart</b></span></a></b></td></tr>';
        }
        }
        $c=0;
        echo '</table></div>';
        
        }
        
        //ranking start
        if(@$_GET['q']== 2) 
        {
        $q=mysqli_query($con,"SELECT * FROM rank  ORDER BY score DESC " )or die('Error223');
        echo  '<div class="panel title">
        <table class="table table-striped title1" >
        <tr style="color:red"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Score</b></td></tr>';
        $c=0;
        while($row=mysqli_fetch_array($q) )
        {
        $e=$row['email'];
        $s=$row['score'];
        $q12=mysqli_query($con,"SELECT * FROM user WHERE email='$e' " )or die('Error231');
        while($row=mysqli_fetch_array($q12) )
        {
        $name=$row['name'];
        $gender=$row['gender'];
        $college=$row['college'];
        }
        $c++;
        echo '<tr><td style="color:#99cc32"><b>'.$c.'</b></td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$s.'</td><td>';
        }
        echo '</table></div>';}
        
        ?>
        
        
        <!--home closed-->
        <!--users start-->
        <?php if(@$_GET['q']==1) {
        
        $result = mysqli_query($con,"SELECT * FROM user") or die('Error');
        echo  '<div class="panel"><table class="table table-striped title1">
        <tr><td><b>STT</b></td><td><b>Tên</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Email</b></td><td><b>Mobile</b></td><td></td></tr>';
        $c=1;
        while($row = mysqli_fetch_array($result)) {
          $name = $row['name'];
          $mob = $row['mob'];
          $gender = $row['gender'];
            $email = $row['email'];
          $college = $row['college'];
        
          echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$email.'</td><td>'.$mob.'</td>
          <td><a title="Delete User" href="update.php?demail='.$email.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td></tr>';
        }
        $c=0;
        echo '</table></div>';
        
        }?>
        <!--user end-->
        
        <!--feedback start-->
        <?php if(@$_GET['q']==3) {
        $result = mysqli_query($con,"SELECT * FROM `feedback` ORDER BY `feedback`.`date` DESC") or die('Error');
        echo  '<div class="panel"><table class="table table-striped title1">
        <tr><td><b>S.N.</b></td><td><b>Subject</b></td><td><b>Email</b></td><td><b>Date</b></td><td><b>Time</b></td><td><b>By</b></td><td></td><td></td></tr>';
        $c=1;
        while($row = mysqli_fetch_array($result)) {
          $date = $row['date'];
          $date= date("d-m-Y",strtotime($date));
          $time = $row['time'];
          $subject = $row['subject'];
          $name = $row['name'];
          $email = $row['email'];
          $id = $row['id'];
           echo '<tr><td>'.$c++.'</td>';
          echo '<td><a title="Click to open feedback" href="dash.php?q=3&fid='.$id.'">'.$subject.'</a></td><td>'.$email.'</td><td>'.$date.'</td><td>'.$time.'</td><td>'.$name.'</td>
          <td><a title="Open Feedback" href="dash.php?q=3&fid='.$id.'"><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>';
          echo '<td><a title="Delete Feedback" href="update.php?fdid='.$id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>
        
          </tr>';
        }
        echo '</table></div>';
        }
        ?>
        <!--feedback closed-->
        
        <!--feedback reading portion start-->
        <?php if(@$_GET['fid']) {
        echo '<br />';
        $id=@$_GET['fid'];
        $result = mysqli_query($con,"SELECT * FROM feedback WHERE id='$id' ") or die('Error');
        while($row = mysqli_fetch_array($result)) {
          $name = $row['name'];
          $subject = $row['subject'];
          $date = $row['date'];
          $date= date("d-m-Y",strtotime($date));
          $time = $row['time'];
          $feedback = $row['feedback'];
          
        echo '<div class="panel"<a title="Back to Archive" href="update.php?q1=2"><b><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span></b></a><h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;"><b>'.$subject.'</b></h1>';
         echo '<div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span style="line-height:35px;padding:5px;">-&nbsp;<b>DATE:</b>&nbsp;'.$date.'</span>
        <span style="line-height:35px;padding:5px;">&nbsp;<b>Time:</b>&nbsp;'.$time.'</span><span style="line-height:35px;padding:5px;">&nbsp;<b>By:</b>&nbsp;'.$name.'</span><br />'.$feedback.'</div></div>';}
        }?>
        <!--Feedback reading portion closed-->
        
        <!--add quiz start-->
        <?php
        if(@$_GET['q']==4 && !(@$_GET['step']) ) {
        echo ' 
        <div class="row">
        <span class="title1" style="margin-left:40%;font-size:30px;"><b>Thông tin bộ đề thi</b></span><br /><br />
         <div class="col-md-3"></div><div class="col-md-6">   <form class="form-horizontal title1" name="form" action="update.php?q=addquiz"  method="POST">
        <fieldset>
        
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="name"></label>  
          <div class="col-md-12">
          <input id="name" name="name" placeholder="Tên đề thi" class="form-control input-md" type="text">
            
          </div>
        </div>
        
        
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="total"></label>  
          <div class="col-md-12">
          <input id="total" name="total" placeholder="Tổng số câu" class="form-control input-md" type="number">
            
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="right"></label>  
          <div class="col-md-12">
          <input id="right" name="right" placeholder="Điểm cho câu đúng" class="form-control input-md" min="0" type="number">
            
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="wrong"></label>  
          <div class="col-md-12">
          <input id="wrong" name="wrong" placeholder="Thời gian mỗi câu" class="form-control input-md" min="0" type="number">
            
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="time"></label>  
          <div class="col-md-12">
          <input id="time" name="time" placeholder="Tổng thời gian" class="form-control input-md" min="1" type="number">
            
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="tag"></label>  
          <div class="col-md-12">
          <input id="tag" name="tag" placeholder="Thẻ phục vụ cho tìm kiếm" class="form-control input-md" type="text">
            
          </div>
        </div>
        
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="desc"></label>  
          <div class="col-md-12">
          <textarea rows="8" cols="8" name="desc" class="form-control" placeholder="Mô tả..."></textarea>  
          </div>
        </div>
        
        
        <div class="form-group">
          <label class="col-md-12 control-label" for=""></label>
          <div class="col-md-12"> 
            <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Chấp nhận" class="btn btn-primary"/>
          </div>
        </div>
        
        </fieldset>
        </form></div>';
        
        
        
        }
        ?>
        <!--add quiz end-->
        
        <!--add quiz step2 start-->
        <?php
        if(@$_GET['q']==4 && (@$_GET['step'])==2 ) {
        echo ' 
        <div class="row">
        <span class="title1" style="margin-left:40%;font-size:30px;"><b>Điền các câu hỏi</b></span><br /><br />
         <div class="col-md-3"></div><div class="col-md-6"><form class="form-horizontal title1" name="form" action="update.php?q=addqns&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4 "  method="POST">
        <fieldset>
        ';
         
         for($i=1;$i<=@$_GET['n'];$i++)
         {
        echo '<b>Question number&nbsp;'.$i.'&nbsp;:</><br /><!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="qns'.$i.' "></label>  
          <div class="col-md-12">
          <textarea rows="3" cols="5" name="qns'.$i.'" class="form-control" placeholder="Write question number '.$i.' here..."></textarea>  
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="'.$i.'1"></label>  
          <div class="col-md-12">
          <input id="'.$i.'1" name="'.$i.'1" placeholder="Enter option a" class="form-control input-md" type="text">
            
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="'.$i.'2"></label>  
          <div class="col-md-12">
          <input id="'.$i.'2" name="'.$i.'2" placeholder="Enter option b" class="form-control input-md" type="text">
            
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="'.$i.'3"></label>  
          <div class="col-md-12">
          <input id="'.$i.'3" name="'.$i.'3" placeholder="Enter option c" class="form-control input-md" type="text">
            
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="'.$i.'4"></label>  
          <div class="col-md-12">
          <input id="'.$i.'4" name="'.$i.'4" placeholder="Enter option d" class="form-control input-md" type="text">
            
          </div>
        </div>
        <br />
        <b>Correct answer</b>:<br />
        <select id="ans'.$i.'" name="ans'.$i.'" placeholder="Choose correct answer " class="form-control input-md" >
           <option value="a">Select answer for question '.$i.'</option>
          <option value="a">option a</option>
          <option value="b">option b</option>
          <option value="c">option c</option>
          <option value="d">option d</option> </select><br /><br />'; 
         }
            
        echo '<div class="form-group">
          <label class="col-md-12 control-label" for=""></label>
          <div class="col-md-12"> 
            <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
          </div>
        </div>
        
        </fieldset>
        </form></div>';
        
        
        
        }
        ?><!--add quiz step 2 end-->
        
        <!--remove quiz-->
        <?php if(@$_GET['q']==5) {
        
        $result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
        echo  '<div class="panel"><table class="table table-striped title1">
        <tr><td><b>STT</b></td><td><b>Nội dung</b></td><td><b>Tổng số câu</b></td><td><b>Điểm tối đa</b></td><td><b>Thời gian</b>
        </td><td></td></tr>';
        $c=1;
        while($row = mysqli_fetch_array($result)) {
          $title = $row['title'];
          $total = $row['total'];
          $sahi = $row['sahi'];
            $time = $row['time'];
          $eid = $row['eid'];
          echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
          <td><b><a href="update.php?q=rmquiz&eid='.$eid.'" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Xóa</b></span></a></b></td></tr>';
        }
        $c=0;
        echo '</table></div>';
        
        }
        ?>
        
        
        </div><!--container closed-->
        </div>
      </div> 
</body>
</html>






