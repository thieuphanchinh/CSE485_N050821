<?php
include_once("../dbConnection.php");
$idde=$_POST[$idde];

$sql = "DELETE FROM MyGuests WHERE id='$idde'";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}

$con->close();
// header("location:xoadethimau.php");
?>