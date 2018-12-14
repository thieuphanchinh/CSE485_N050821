<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thi Online</title>
    <link rel="icon" href="./assets/images/fav.png" type="image/x-icon"/>
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/mestyles.css" />
</head>
<body>
    
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="#">Thi Online</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Trang chủ</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Lịch sử</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Xếp hạng</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field" /></div>
                </form><a class="btn btn-light action-button" role="button" href="#">Tìm kiếm</a></div>
        </div>
    </nav>
    
    <?php
 include_once 'dbConnection.php';
session_start();
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['email'];

include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Xin chào,</span> <a href="account.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="index.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Đăng xuất</button></a></span>';
}?>

    <!--navigation menu-->
<nav class="navbar navbar-default title1">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="account.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
          <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="account.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;History</a></li>
          <li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="account.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Ranking</a></li></ul>
              <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter tag ">
          </div>
          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;Search</button>
        </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav><!--navigation menu closed-->
  <div class="container"><!--container start-->
  <div class="row">
  <div class="col-md-12">
  
  <!--home start-->
  <?php if(@$_GET['q']==1) {
  
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
  
  }?>
  <span id="countdown" class="timer"></span>
  <script>
  var seconds = 40;
      function secondPassed() {
      var minutes = Math.round((seconds - 30)/60);
      var remainingSeconds = seconds % 60;
      if (remainingSeconds < 10) {
          remainingSeconds = "0" + remainingSeconds; 
      }
      document.getElementById('countdown').innerHTML = minutes + ":" +    remainingSeconds;
      if (seconds == 0) {
          clearInterval(countdownTimer);
          document.getElementById('countdown').innerHTML = "Buzz Buzz";
      } else {    
          seconds--;
      }
      }
  var countdownTimer = setInterval('secondPassed()', 1000);
  </script>
  
  <!--home closed-->
  
  <!--quiz start-->
  <?php
  if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
  $eid=@$_GET['eid'];
  $sn=@$_GET['n'];
  $total=@$_GET['t'];
  $q=mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' " );
  echo '<div class="panel" style="margin:5%">';
  while($row=mysqli_fetch_array($q) )
  {
  $qns=$row['qns'];
  $qid=$row['qid'];
  echo '<b>Câu &nbsp;'.$sn.'&nbsp;:<br />'.$qns.'</b><br /><br />';
  }
  $q=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid' " );
  echo '<form action="update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'" method="POST"  class="form-horizontal">
  <br />';
  
  while($row=mysqli_fetch_array($q) )
  {
  $option=$row['option'];
  $optionid=$row['optionid'];
  echo'<input type="radio" name="ans" value="'.$optionid.'">'.$option.'<br /><br />';
  }
  echo'<br /><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Câu tiếp theo</button></form></div>';
  //header("location:dash.php?q=4&step=2&eid=$id&n=$total");
  }
  //result display
  if(@$_GET['q']== 'result' && @$_GET['eid']) 
  {
  $eid=@$_GET['eid'];
  $q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error157');
  echo  '<div class="panel">
  <center><h1 class="title" style="color:#660033">Kết quả</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';
  
  while($row=mysqli_fetch_array($q) )
  {
  $s=$row['score'];
  $w=$row['wrong'];
  $r=$row['sahi'];
  $qa=$row['level'];
  echo '<tr style="color:#66CCFF"><td>Tổng số câu</td><td>'.$qa.'</td></tr>
        <tr style="color:#99cc32"><td>Đúng&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>'.$r.'</td></tr> 
        <tr style="color:red"><td>Sai&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>'.$w.'</td></tr>
        <tr style="color:#66CCFF"><td>Điểm&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
  }
  $q=mysqli_query($con,"SELECT * FROM rank WHERE  email='$email' " )or die('Error157');
  while($row=mysqli_fetch_array($q) )
  {
  $s=$row['score'];
  echo '<tr style="color:#990000"><td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
  }
  echo '</table></div>';
  
  }
  ?>
  <!--quiz end-->
  <?php
  //history start
  if(@$_GET['q']== 2) 
  {
  $q=mysqli_query($con,"SELECT * FROM history WHERE email='$email' ORDER BY date DESC " )or die('Error197');
  echo  '<div class="panel title">
  <table class="table table-striped title1" >
  <tr style="color:red"><td><b>S.N.</b></td><td><b>Quiz</b></td><td><b>Question Solved</b></td><td><b>Right</b></td><td><b>Wrong<b></td><td><b>Score</b></td>';
  $c=0;
  while($row=mysqli_fetch_array($q) )
  {
  $eid=$row['eid'];
  $s=$row['score'];
  $w=$row['wrong'];
  $r=$row['sahi'];
  $qa=$row['level'];
  $q23=mysqli_query($con,"SELECT title FROM quiz WHERE  eid='$eid' " )or die('Error208');
  while($row=mysqli_fetch_array($q23) )
  {
  $title=$row['title'];
  }
  $c++;
  echo '<tr><td>'.$c.'</td><td>'.$title.'</td><td>'.$qa.'</td><td>'.$r.'</td><td>'.$w.'</td><td>'.$s.'</td></tr>';
  }
  echo'</table></div>';
  }
  
  //ranking start
  if(@$_GET['q']== 3) 
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
  
  
  
  </div></div></div></div>
</body>

</html>
