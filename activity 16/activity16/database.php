<?php
$username=$_POST["username"];
$password=$_POST["password"];
$confirmpassword=$_POST["confirmpassword"];
$dob=$_POST["date"];
$gender=$_POST["gender"];
$database=mysqli_connect("localhost","root","","register");
if(!$database)
{
die("connection failed:".mysqli_connect_error());
}
$table="INSERT INTO register(USERNAME,PASSWORD,CONFIRMPASSWORD,DOB,GENDER)values('$username','$password','$confirmpassword',$dob','$gender')";
if(mysqli_query($database,$table))
{
echo "DETAILS INSERTED SUCCESFULLY";
}
else
{
echo "DETAILS NOT INSERTED SUCCESFULLY";
}
mysqli_close($database);
?>