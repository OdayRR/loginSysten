<?php
session_start();
require('connect.php');


$D = "SELECT `username`,  `message` ,`Time` FROM oday ORDER BY Time DESC";

$result1 = mysqli_query($C, $D);

while($extract = mysqli_fetch_array($result1)) {
	echo "<span style='color:green;'>" . $extract['username'] . "</span> : <span style='color:brown;'>" . $extract['message'] . "</span> "
                . "<p style='color:blue;'>". $extract['Time']."<p/><br />";
}












 

    