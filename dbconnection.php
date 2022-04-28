<?php
$con = mysqli_connect("localhost","root","","collegemanagementsystem");
if(mysqli_connect_errno($con))
{
	echo "Failed to connect server .. " . mysqli_connect_error();
}
?>