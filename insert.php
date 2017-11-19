<?php
session_start();

require('connect.php');
$username= $_SESSION['username'];
$msg = $_REQUEST['message'];





$sql = "UPDATE oday SET message='$msg' WHERE username='$username'";


$result1 = mysqli_query($C,$sql);


while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['message'] . "</span><br />";
}
