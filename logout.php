<?php
mysqli_close($link);
/* begin*/ 
session_start();
if(isset($_SESSION['email'])){
session_destroy();}
$ref= @$_GET['q'];
header("location:$ref");





?>