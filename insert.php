<?php

include("connection.php");

if(isset($_POST['Submit'])) 
{

$Name = mysqli_real_escape_string($conn,$_POST['Name']);
$Email = mysqli_real_escape_string($conn,$_POST['Email']);
$Gender= mysqli_real_escape_string($conn,$_POST['Gender']);
$Shift=mysqli_real_escape_string($conn,$_POST['Shift']);
$Start_date=mysqli_real_escape_string($conn,$_POST['Start_date']);
$End_date=mysqli_real_escape_string($conn,$_POST['End_date']);
$Comments=mysqli_real_escape_string($conn,$_POST['Comments']);


$res = mysqli_query($conn, "INSERT INTO Details (Name,Email,Gender,Shift,Start_Date,End_date,Comments)
 VALUES ('$Name','$Email','$Gender','$Shift','$Start_date','$End_date','$Comments')");
if ($res) 
{
	echo "Data inserted";
}
 else 
 {
	echo "Not inserted";
}

}
mysqli_close($conn);


?>