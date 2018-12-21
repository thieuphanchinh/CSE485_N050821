<?php
session_start();
if(isset($_SESSION["email"])){
    session_destroy();
}
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$email = $_POST['email'];
$password = md5($_POST['password']);


//$password=md5($password); 
$result = mysqli_query($con,"SELECT name FROM user WHERE email = '$email' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
    while($row = mysqli_fetch_array($result)) {
        $name = $row['name'];
    }
    $_SESSION["name"] = $name;
	$_SESSION["email"] = $email;
	if(isset($_POST['email']))
	header("location:account.php?q=1");
	
}
else {
	$result = mysqli_query($con,"SELECT email FROM admin WHERE email = '$email' and password = '$password'"); 
	$count=mysqli_num_rows($result);
	if($count==1){
		session_start();
		if(isset($_SESSION['email'])){
		session_unset();}
		$_SESSION["name"] = 'Admin';
		$_SESSION["key"] ='vip';
		$_SESSION["email"] = $email;
		if(isset($_POST['email']))
		header("location:dash.php?q=0");
		
	} else
	{
	header("location:index.php?w=Sai tài khoản hoặc mật khẩu");
	
	}
}
?>