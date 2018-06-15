<?php

$conn=mysqli_connect("localhost","root","","Form");

if ($conn) 
{
	echo "";
} 
else {

	echo "Not Connected".mysqli_connect_error();
}

?>

