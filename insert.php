<?php
error_reporting(0);


$con = mysqli_connect('localhost', 'root', '','good_shoot');

$txtName =  $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtMobile = $_POST['txtMobile'];


$sql = "INSERT INTO studio (`Name`, `Email`, `Mobile`) VALUES ( '$txtName', '$txtEmail', '$txtMobile')";

 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo " Records Saved";
}

?>

